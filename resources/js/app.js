import { createApp } from 'vue'

// carousel
import { Carousel, Slide, Navigation, Pagination } from 'vue3-carousel'

/** counter */
import CountUp from 'vue-countup-v3'


// image viewver
import VueViewer from 'v-viewer'

// notification
import Notifications from '@kyvg/vue3-notification'

// axios
import Ax from "axios";

// aos
import AOS from 'aos';


const app = createApp({
  data() {
    return {
      isLoading: false,

      // header
      cartCount: 0,

      /** product page */
      product: {
        count: 1,
        min_order: 1,
        max_order: 20
      },

      /** cart page */
      carts: [],

      breakpoints: {
        // 1 and up
        1: {
          itemsToShow: 1,
          snapAlign: 'center',
        },
        // 320 and up
        320: {
          itemsToShow: 1.5,
          snapAlign: 'center',
        },
        // 700 and up
        700: {
          itemsToShow: 2.5,
          snapAlign: 'center',
        },
        // 1024 and up
        1024: {
          itemsToShow: 4,
          snapAlign: 'center',
        },
      },

    }
  },
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
    CountUp
  },
  computed: {
    /** product page set detail product [min-order max-order and etc] in read.bleade product*/
    loadProduct() {
      this.product.min_order = product ? product.min_order : 1;
      this.product.max_order = product ? product.max_order : 5;
    },
    activeMenu() {
      let url = window.location.href;
      if (url.search('contact-us') > 0) return 'contact-us';
      else if (url.search('products') > 0) return 'products';
      return 'index';
    },

    /** cart page */
    loadCarts() {
      this.carts = carts
    },
    amount() {
      let price = 0;
      let cartCount = 0;
      if (this.carts) {
        this.carts.products.map((product) => {
          price += product.stock;
          cartCount++;
        });
      }
      this.cartCount = cartCount;
      localStorage.setItem('cartCount', this.cartCount);
      return price;
    }
  },
  methods: {
    /**format numbers */
    numberWithCommas(x) {
      if (!x) return 0
      var parts = x.toString().split(".");
      parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      return parts.join(".");
    },

    sliderCount() {
      let width = window.innerWidth;
      if (width > 1000)
        return 3.5;
      else if (width > 700)
        return 2.5;
      else
        return 1;
    },

    /**---------------------------------------------Start product read ---------------------------------------------*/
    async addToCart(idProduct) {
      try {
        if (this.isLoading) return;
        this.isLoading = true;


        let data = {
          id: idProduct,
          count: this.product.count
        }

        let req = await Ax.post('/cart/add', data, {
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        })

        this.cartCount = req.data.count;
        localStorage.setItem('cartCount', this.cartCount);

        this.product.max_order = this.product.max_order - req.data.currentProduct;
        this.product.count = 1

        this.$notify({
          type: 'success',
          text: `عملیات با موفقیت انجام شد  <br> 
           تعداد ${req.data.currentProduct}  عدد از این محصول در سبد خرید شما موجود است . <br>
           <a style='color:white' href='/cart/index'> تکمیل و پرداخت </a>`,
          duration: 7000,
        });

      } catch (error) {
        this.$notify({
          type: 'warn',
          text: error
        });
      }
      this.isLoading = false;
    },
    /**---------------------------------------------End product read ---------------------------------------------*/

    /**---------------------------------------------Start Cart page ---------------------------------------------*/
    /** btn submit payment */
    async goToPayment() {
      try {
        if (this.isLoading) return;

        if (!this.carts.address) {
          return this.$notify({
            type: 'warn',
            text: 'لطفا آدرس دقیق خود را وارد نمائید',
            duration: 3000,
          });
        }

        this.isLoading = true;

        let data = {
          cart: this.carts
        }

        let req = await Ax.post('/cart/check-stock', data, {
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        })
        if (req.data != 'success') {
          this.$notify({
            type: 'warn',
            text: 'موجودی برخی کالاها در انبار تغییر کرده است. <br> این کالاها اصلاح شدند',
            duration: 7000,
          });
          setTimeout(() => {
            location.reload();
          }, 2000);
          return
        }

        this.isLoading = false;

        this.$notify({
          type: 'success',
          text: 'در حال انتقال به درگاه پرداخت. <br> لطفا منتظر بمانید',
          duration: 7000,
        });


        location.href = `/payment-request?&id=${this.carts.id}`;


        this.cartCount = 0;
        localStorage.setItem('cartCount', this.cartCount);

      } catch (error) {
        console.log(error);
        this.$notify({
          type: 'warn',
          text: error
        });
      }
      this.isLoading = false;
    },
    /**---------------------------------------------End Cart page ---------------------------------------------*/


    /**---------------------------------------------Start Contact-and-Help page ---------------------------------------------*/
    async copyToClipboard(mytext) {
      try {
        await navigator.clipboard.writeText(mytext);
        this.$notify({
          type: 'success',
          text: `متن ${mytext} کپی شد`

        });
      } catch ($e) {
        return;
      }
    }
    /**---------------------------------------------End Contact-and-Help page ---------------------------------------------*/


  },
  mounted() {
    // // set cart count
    if (localStorage.getItem('cartCount'))
      this.cartCount = localStorage.getItem('cartCount');
  }
});
app.use(VueViewer);
app.use(Notifications)
app.use(AOS.init())
app.mount('#app');