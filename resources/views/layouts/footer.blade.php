    {{-- footer --}}
    <footer id="footer">
        <div class="container p-0">
            <div class="row">
                <div class="col-12 col-xl-6 px-0">
                    <div class="bg-logo">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="316.239" height="458.336" viewBox="0 0 316.239 458.336">
                                <g id="Group_237" data-name="Group 237" transform="translate(-509.893 -437.461)" opacity="0.05">
                                    <path id="Path_1777" data-name="Path 1777" d="M1112.059,639.174q-14.791-22.779-45.412-31.068,28.922-10.586,47.669-30.041,18.791-19.45,22.893-44.567,7.778-47.65-20.629-71.822-28.358-24.194-92.345-24.214H895.629L836.835,797.588H973.249c.989,0,1.928,0,2.923-.041l6.353-38.907c-.637.041-1.264.041-1.893.041H895.015l21.166-129.644h86.6q77.274,0,66.679,65.17-4.928,30.165-28.773,47.321a76.466,76.466,0,0,1-9.335,5.786l-7.323,44.857q29.117-6.834,50.806-22.326,38.926-27.765,46.795-76.088Q1126.818,661.99,1112.059,639.174Zm-54.181-63.652q-22.93,15.509-57.194,15.554h-78.3l18.687-114.461h76.777q38.567,0,55.33,13.461,16.848,13.483,11.977,43.175Q1080.789,559.967,1057.877,575.522Z" transform="translate(-326.942 0)" fill="#fff" />
                                    <path id="Path_1778" data-name="Path 1778" d="M919.563,792.114h186.543l-6.351,38.911H861.1l58.788-360.1H972Z" transform="translate(-279.974 64.773)" fill="#fff" />
                                </g>
                            </svg> -->
                        <img src="{{ asset('source/bg-logo-grayscale.png') }}" class="w-75" alt="">

                    </div>
                    <div class="content-items">
                        <div class="logo mx-2 mx-md-0">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="65.198" height="94.493" viewBox="0 0 65.198 94.493">
                                    <g id="Group_239" data-name="Group 239" transform="translate(-509.893 -437.461)">
                                        <path id="Path_1777" data-name="Path 1777" d="M893.577,479.047a15.423,15.423,0,0,0-9.362-6.405,25.594,25.594,0,0,0,9.828-6.193,16.931,16.931,0,0,0,4.72-9.188q1.6-9.824-4.253-14.807t-19.038-4.992H848.956l-12.121,74.246h28.124c.2,0,.4,0,.6-.008l1.31-8.021c-.131.008-.261.008-.39.008H848.83l4.364-26.728h17.855q15.931,0,13.747,13.436a14.407,14.407,0,0,1-5.932,9.756,15.764,15.764,0,0,1-1.925,1.193l-1.51,9.248a29.318,29.318,0,0,0,10.474-4.6,23.064,23.064,0,0,0,9.647-15.687A15.427,15.427,0,0,0,893.577,479.047Zm-11.17-13.123a20.585,20.585,0,0,1-11.792,3.207H854.471l3.853-23.6h15.829q7.951,0,11.407,2.775,3.474,2.78,2.469,8.9A12.606,12.606,0,0,1,882.406,465.924Z" transform="translate(-326.942)" fill="#fff" />
                                        <path id="Path_1778" data-name="Path 1778" d="M873.152,537.141h38.459l-1.309,8.022H861.1l12.12-74.24h10.744Z" transform="translate(-336.52 -13.209)" fill="#fff" />
                                    </g>
                                </svg> -->
                        </div>
                        <div class="text-info">
                            <div class="title">
                                <h1 class="title-footer">هنرستان البرز </h1>
                            </div>
                            <div class="text">
                                <small class="about-text">
                                    هنرستان نمونه البرز در استان خراسان جنوبی با کادری مجرب و هنرحویان توانا اقدام به تولید و فروش محصولات .. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6 my-2 my-md-4 my-xl-0 px-0">
                    <div class="d-flex align-items-baseline justify-content-around justify-content-xl-center flex-column flex-sm-row">
                        <!-- about us -->
                        <div class="about-us">
                            <div class="title">
                                <p>درباره ما</p>
                            </div>
                            <div class="items">
                                <ul>
                                    <li class="btn-help"><a href="/contact-us" >راهنمای استفاده</a></li>
                                    <li><a href="https://www.aparat.com/v/WTvY3" target="_blank">معرفی هنرستان</a></li>
                                </ul>
                            </div>

                            {{-- details with counter --}}
                            {{-- user active counter --}}
                            <p class="d-flex m-0">
                                <span>
                                    کاربران فعال :
                                </span>
                                <span>
                                    <?php
                                    use App\Models\User;
                                    $userCount = User::count();
                                    ?>
                                    <count-up :end-val="{{ $userCount + 50 }}" :options="{ 'enableScrollSpy': true }"></count-up>
                                </span>
                            </p>
                            {{-- product Counter --}}
                            <p class="d-flex">
                                <span>
                                    تعداد محصولات :
                                </span>
                                <span>
                                    <?php
                                    use App\Models\Product;
                                    $productCount = Product::count();
                                    ?>
                                    <count-up :end-val="{{ $productCount + 50 }}" :options="{ 'enableScrollSpy': true }"></count-up>
                                </span>
                            </p>
                        </div>
                        <!-- social media -->
                        <div class="social-media">
                            <div class="title">
                                <p>شبکه های اجتماعی</p>
                            </div>
                            <div class="items">
                                <ul class="d-flex align-items-center">

                                    <li class="mx-2">
                                        <a href="https://t.me/hassan_Abedini"><svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="16.438" viewBox="0 0 19.601 16.438">
                                                <path id="Icon_awesome-telegram-plane" data-name="Icon awesome-telegram-plane" d="M19.546,6.025,16.588,19.974c-.223.985-.805,1.23-1.632.766l-4.507-3.321L8.275,19.51a1.132,1.132,0,0,1-.906.442l.324-4.59,8.353-7.548c.363-.324-.079-.5-.564-.179l-10.326,6.5L.709,12.746c-.967-.3-.985-.967.2-1.431L18.3,4.616c.805-.3,1.51.179,1.247,1.409Z" transform="translate(-0.001 -4.528)" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="https://www.instagram.com/GigoTest/"><svg xmlns="http://www.w3.org/2000/svg" width="19.614" height="19.609" viewBox="0 0 19.614 19.609">
                                                <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram"
                                                    d="M9.8,7.015a5.028,5.028,0,1,0,5.028,5.028A5.02,5.02,0,0,0,9.8,7.015Zm0,8.3a3.269,3.269,0,1,1,3.269-3.269A3.275,3.275,0,0,1,9.8,15.311Zm6.406-8.5a1.173,1.173,0,1,1-1.173-1.173A1.17,1.17,0,0,1,16.21,6.809ZM19.539,8a5.8,5.8,0,0,0-1.584-4.109,5.841,5.841,0,0,0-4.109-1.584c-1.619-.092-6.472-.092-8.091,0a5.833,5.833,0,0,0-4.109,1.58A5.822,5.822,0,0,0,.064,7.995c-.092,1.619-.092,6.472,0,8.091a5.8,5.8,0,0,0,1.584,4.109,5.849,5.849,0,0,0,4.109,1.584c1.619.092,6.472.092,8.091,0a5.8,5.8,0,0,0,4.109-1.584,5.841,5.841,0,0,0,1.584-4.109c.092-1.619.092-6.467,0-8.086Zm-2.092,9.823a3.309,3.309,0,0,1-1.864,1.864c-1.291.512-4.354.394-5.78.394s-4.494.114-5.78-.394A3.309,3.309,0,0,1,2.16,17.823c-.512-1.291-.394-4.354-.394-5.78s-.114-4.494.394-5.78A3.309,3.309,0,0,1,4.024,4.4C5.314,3.886,8.377,4,9.8,4s4.494-.114,5.78.394a3.309,3.309,0,0,1,1.864,1.864c.512,1.291.394,4.354.394,5.78S17.96,16.536,17.448,17.823Z"
                                                    transform="translate(0.005 -2.238)" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <div class="support">
                                    <!-- phone -->
                                    <a href="tel:09157915935" class="d-flex align-items-center my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-1" width="16.27" height="21.603" viewBox="0 0 16.27 21.603">
                                            <path id="phone"
                                                d="M181.522,69.628c2.97,1.716-1.56,10.21-4.811,8.334L173.7,83.181c1.373.792,2.53,1.291,4.12.383,4.414-2.523,9.272-10.934,9.134-15.95-.047-1.743-1.076-2.427-2.417-3.2C183.958,65.409,182.1,68.628,181.522,69.628Zm-1.244-.141a.675.675,0,0,0,.921-.247l2.839-4.92a.675.675,0,0,0-.247-.921l-1.494-.862a.675.675,0,0,0-.921.247l-2.841,4.92a.671.671,0,0,0,.247.918Zm-7.761,13.442a.675.675,0,0,0,.921-.247l2.839-4.92a.675.675,0,0,0-.247-.921l-1.494-.862a.675.675,0,0,0-.921.247l-2.841,4.92a.675.675,0,0,0,.247.921Z"
                                                transform="translate(-170.683 -62.448)" />
                                        </svg>
                                        <span class="text-white">شماره تماس : 056 32402246 </span>
                                    </a>
                                    <!-- telegram -->
                                    <a href="https://t.me/hassan_Abedini" class="d-flex align-items-center my-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-1" width="19.601" height="16.438" viewBox="0 0 19.601 16.438">
                                            <path id="Icon_awesome-telegram-plane" data-name="Icon awesome-telegram-plane" d="M19.546,6.025,16.588,19.974c-.223.985-.805,1.23-1.632.766l-4.507-3.321L8.275,19.51a1.132,1.132,0,0,1-.906.442l.324-4.59,8.353-7.548c.363-.324-.079-.5-.564-.179l-10.326,6.5L.709,12.746c-.967-.3-.985-.967.2-1.431L18.3,4.616c.805-.3,1.51.179,1.247,1.409Z" transform="translate(-0.001 -4.528)" />
                                        </svg>
                                        <span class="text-white">پشتیانی تلگرام : @hassan_Abedini </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="col-12 text-center pt-3 px-0">
                    <small class="text-white">تمامی حقوق مادی و معنوی وب سایت متعلق به هنرستان البرز است</small>
                </div>
            </div>
        </div>
    </footer>
