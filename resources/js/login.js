import { createApp } from 'vue'

// notification
import Notifications from '@kyvg/vue3-notification'

// axios
import Ax from "axios";

/** custom mobile validator */
var mobileValidator = {
  isMobile: function (str) {
    var pattern = /^([0][9][\d][\d][\d][\d][\d][\d][\d][\d][\d])$/;
    return pattern.test(str);  // returns a boolean
  },
}

let intervalResendTime;

const app = createApp({
  data() {
    return {
      isLoading: false,
      typePage: 'login',

      stepRegister: 0,

      password: null,
      passwordRepeat: null,
      name: null,
      mobile: '09157915935',
      pincode: '',
      resendTime: 0


    }
  },
  computed: {

  },
  methods: {
    resendPinCode() {
      this.resendTime = 120;
      localStorage.setItem('resendTime', 120);
      let ls = this;
      intervalResendTime = setInterval(() => {
        if (ls.resendTime > 0) {
          ls.resendTime--;
        }
        else {
          localStorage.removeItem('resendTime');
          clearInterval(intervalResendTime);
        }
      }, 1000);
    },

    // filter pin code
    filterNonNumeric() {
      this.pincode = this.pincode.replace(/\D/g, '');
    },

    // validate checker
    inValidate(type) {

      if (this.isLoading) return true;

      if (!mobileValidator.isMobile(this.mobile)) {
        this.$notify({
          type: 'warn',
          text: "شماره مویابل اشتباه می باشد",
          duration: 7000,
        });
        return true;
      }

      if (type == 'register') {
        if (!this.name || !this.password || !this.pincode) {
          this.$notify({
            type: 'warn',
            text: `لطفا تمام موارد را تکمیل نمائید`,
            duration: 7000,
          });
          return true;
        }

        if (this.password != this.passwordRepeat) {
          this.$notify({
            type: 'warn',
            text: "کلمه عبور وارد شده با تکرارش مفایرت دارد",
            duration: 7000,
          });
          return true;
        }
      }

      if (type == 'forget') {
        if (this.pincode.length < 5) {
          this.$notify({
            type: 'warn',
            text: `لطفا کد ارسال شده را کامل وارد نمائید`,
            duration: 7000,
          });
          return true;
        }
      }

      if (type == 'login') {
        if (!this.password) {
          this.$notify({
            type: 'warn',
            text: `لطفا کلمه عبور را وارد نمائید`,
            duration: 7000,
          });
          return true;
        }
      }

      return false;
    },

    /**---------------------------------------------Start product read ---------------------------------------------*/

    async checkMobileUniq(type) {
      try {

        this.stepRegister = 0;

        if (this.resendTime) {
          return this.$notify({
            type: 'error',
            text: `درخواست بیش از حد. <br> لطفا تا ${this.resendTime} ثانیه دیگر شکیبا باشید`,
            duration: 7000,
          });
        }

        if (this.inValidate()) {
          return;
        }

        this.isLoading = true;

        let data = {
          method: 'checkMobileUniq',
          mobile: this.mobile
        }
        let req = await Ax.post('/user-auth', data, {
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        })

        if (type == 'forget') {
          return this.sendConfirmCode();
        }

        this.$notify({
          type: 'warn',
          text: "شماره وارد شده قبلا ثبت نام کرده است <br> برای ورود لطفا از بازیابی کلمه عبور استفاده نمائید",
          duration: 7000,
        });

      } catch (error) {
        return this.sendConfirmCode();
      }
      this.isLoading = false;
    },

    async register() {
      try {

        if (this.inValidate('register')) {
          return;
        }

        this.isLoading = true;

        let data = {
          name: this.name,
          mobile: this.mobile,
          pincode: this.pincode,
          password: this.password,
          method: 'register',
        }

        let req = await Ax.post('/user-auth', data, {
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        })

        this.$notify({
          type: 'success',
          text: `ثبت نام شما با موفقیت انجام شد `,
          duration: 7000,
        });

        setTimeout(() => {
          location.reload();
        }, 1000);
      } catch (error) {
        this.$notify({
          type: 'warn',
          text: 'کد وارد شده اشتباه یا منقضی شده است'
        });
      }
      this.isLoading = false;
    },

    async login() {
      try {
        if (this.inValidate('login')) {
          return;
        }

        this.isLoading = true;

        let data = {
          mobile: this.mobile,
          password: this.password,
          method: 'login',
        }

        let req = await Ax.post('/user-auth', data, {
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        })

        this.$notify({
          type: 'success',
          text: `ورود موفق به وب سایت`,
          duration: 7000,
        });

        setTimeout(() => {
          location.reload();
        }, 1000);
      } catch (error) {
        this.$notify({
          type: 'warn',
          text: 'نام کاربری یا کلمه عبور اشتباه است'
        });
      }
      this.isLoading = false;
    },

    async sendConfirmCode() {
      try {
        this.resendPinCode();

        let data = {
          mobile: this.mobile,
          method: 'sendConfirmCode',
        }

        let req = await Ax.post('/user-auth', data, {
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        })

        this.$notify({
          type: 'success',
          text: `کد تائید به شماره ${this.mobile} ارسال شد`,
          duration: 7000,
        });
        this.stepRegister = 1;

      } catch (error) {
        this.$notify({
          type: 'warn',
          text: error
        });
      }
      this.isLoading = false;
    },

    async submitForget() {
      try {


        if (this.inValidate('forget')) {
          return;
        }

        this.isLoading = true;

        let data = {
          mobile: this.mobile,
          pincode: this.pincode,
          password: this.password,
          method: 'forget',
        }

        let req = await Ax.post('/user-auth', data, {
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        })

        this.$notify({
          type: 'success',
          text: ` تغییر کلمه عبور با موفقیت انجام شد`,
          duration: 7000,
        });

        setTimeout(() => {
          location.reload();
        }, 1000);
      } catch (error) {
        this.$notify({
          type: 'warn',
          text: 'کد وارد شده اشتباه یا منقضی شده است'
        });
      }
      this.isLoading = false;
    },
    /**---------------------------------------------End product read ---------------------------------------------*/

  },
  mounted() {
    if (localStorage.getItem('resendTime')) {
      this.resendPinCode();
    }
  },
  beforeUnmount() {
    clearInterval(intervalResendTime);
  }
});
app.use(Notifications)
app.mount('#login');