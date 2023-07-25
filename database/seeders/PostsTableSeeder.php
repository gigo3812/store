<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 5,
                'author_id' => 2,
                'category_id' => 1,
                'title' => 'جشن شکوفه ها در مدارس بیرجند',
                'seo_title' => 'جشن شکوفه در بیرجند',
                'excerpt' => 'شما معلمین می توانید با یادآوری نکات زیر به والدین دانش آموزان کمک زیادی در امر تدریس و موفقیت دانش آموزان کنید. (با ذکر این نکته که این پست بیشتر برای معلمین تازه کار مثل خودم و سال اولی ها قرار گرفته است.',
                    'body' => '<h3 dir="rtl">متن سخنرانی مدیران در جشن شکوفه ها</h3>
<p dir="rtl"><span lang="FA">با سلام خدمت شما دوستان و همکاران عزیز؛</span></p>
<p dir="rtl"><span lang="FA">&nbsp;&nbsp;&nbsp;&nbsp; در این تاپیک سعی در ارایه نکاتی در رابطه با روزهای اول تدریس و شروع مدرسه شده است که باید معلمین عزیز در&nbsp;</span>جلسات اولیاء و مربیان<span lang="FA">&nbsp;این نکات را مد نظر داشته باشند.</span></p>
<p dir="rtl"><span lang="FA">&nbsp;&nbsp;&nbsp;&nbsp; شما معلمین می توانید با یادآوری نکات زیر به والدین دانش آموزان کمک زیادی در امر تدریس و موفقیت دانش آموزان کنید. (با ذکر این نکته که این پست بیشتر برای معلمین تازه کار مثل خودم و سال اولی ها قرار گرفته است.)</span></p>
<p dir="rtl"><span lang="FA">&nbsp;&nbsp;&nbsp;&nbsp; البته اگر نکته ای جدید مد نظر شماست، حتما در قسمت نظرات بیان کنید.</span></p>
<p dir="rtl"><span lang="FA"><br></span><img class="lazy-load-active" src="https://www.tabnak.ir/files/fa/news/1387/6/26/16678_968.jpg" alt="" align="bottom" border="0" hspace="0" data-src="https://www.tabnak.ir/files/fa/news/1387/6/26/16678_968.jpg"></p>
<p dir="rtl"><span lang="FA">سخنی با والدین کلاس اولی ها ( مقطع ابتدایی ):</span></p>
<p dir="rtl"><span lang="FA">*</span><span dir="ltr">&nbsp;حضور در مدرسه، برقراری ارتباط نزدیک با کارکنان مدرسه و تماس تلفنی با معلم فرزندانتان را مد نظر داشته باشید.<br></span></p>
<p dir="rtl"><span lang="FA">*&nbsp;</span><span dir="ltr">از تدریس کتاب های درسی در خانه، قبل از تدریس و بعد از تدریس معلم، خودداری شود تا دانش آموز دچار تعارض نشود.<br></span></p>
<p dir="rtl"><span lang="FA">*&nbsp;</span><span lang="FA">از نوشتن تمارین و تکالیف، به منظور کمک به کودک خودداری شود و فقط نقش راهنما را ایفا کنید.</span></p>
<p dir="rtl"><span lang="FA">*</span><span lang="FA">&nbsp;اجازه بدهید فرزند دلبندتان فکر کند، بنویسد، پاک کند، اشتباهاتش را کشف و اصلاح کند تا سرانجام یاد بگیرید. از این طریق عضلات دست کودک تقویت شده، آمادگی کافی برای نوشتن در آینده را کسب می کند.</span></p>
<p dir="rtl"><span lang="FA">*&nbsp;</span><span lang="FA">به چپ دست بودن و نمره بیست گرفتن فرزندتان حساسیت نشان ندهید.</span></p>
<p dir="rtl"><span lang="FA">*</span><span lang="FA">&nbsp;موقع خرید وسایل مدرسه و لوازم التحریر سعی کنید وسایل ساده را انتخاب کنید تا در کلاس برای فراگیران دل مشغولی ایجاد نشود.</span></p>
<p dir="rtl"><span lang="FA">*&nbsp;</span><span lang="FA">برای دانش آموزان پایه های اول؛ خودکار، ماژیک، مداد فشنگی، مداد فشاری و مداد شمعی به هیچ وجه کاربرد ندارد. و تنها موجب بد خطی، تقویت نشدن عضلات دست، زود خسته شدن و از بین رفتن دفاتر و کتابها را در پی خواهد داشت.</span></p>
<p dir="rtl"><span lang="FA">&nbsp;&nbsp;&nbsp; در کلاس اول فقط از مدادهای معمولی و&nbsp;</span><span dir="ltr">HB</span>&nbsp;<span lang="FA">و در کلاس نقاشی از مدادهای رنگی معمولی استفاده شود.</span></p>
<p dir="rtl"><span lang="FA">*&nbsp;</span><span lang="FA">نام و نام خانوادگی فرزندتان را با برچسب های کوچک بر روی کلیه وسایل او اعم از کتابها، دفترها، مدادها، مداد تراش، جامدادی و &hellip; بچسبانید.</span></p>
<p dir="rtl"><span lang="FA">*&nbsp;</span><span lang="FA">لطفا به وقت خواب فرزندتان بیشتر اهمیت بدهید. بهتر است فرزندتان اولِ شب بخوابد و صبح ها یک ساعت قبل از رفتن به مدرسه بیدار شود. (مقدار خواب برای دانش آموزان کلاس اولی، حداقل هشت ساعت است.)</span></p>
<p dir="rtl"><span lang="FA">*&nbsp;</span><span lang="FA">فرزندتان را به خوردن صبحانه عادت دهید و او را از خوردن تنقلاتی مثل پفک، چیپس، لواشک و مانند آن منع کنید</span></p>
<p dir="rtl"><span lang="FA">*&nbsp;</span><span lang="FA">برنامه هفتگی و روزانه کلاس را هر شب قبل از خواب جمع کنید، تا دانش آموز فردی منضبط و منظم به بار آید.</span></p>
<p dir="rtl"><span lang="FA">*&nbsp;</span><span lang="FA">(با توجه به توصیفی شدن ارزشیابی ها) کلیه اوراق امتحانی، آزمون ها، کارهای کلاسی و دفاتری را که تمام می شوند را در داخل یک کیسه پلاستیکی یا یک پوشه بایگانی کنید و هر ماه پیشرفت فرزندتان را با خودش بسنجید و مقایسه کنید<br></span></p>
<p dir="rtl"><span lang="FA">*</span><span lang="FA">&nbsp;هیچ گاه توانایی فرزندتان را با همسالان و هم کلاسی هایش مقایسه نکنید، زیرا تفاوت های فردی بین افراد وجود دارد.<br></span></p>
<p dir="rtl"><span lang="FA">*</span><span lang="FA">&nbsp;در مناطق دو زبانه سعی بر آن شود که با فرزندان و دانش آموزان مقطع ابتدایی در خانه فارسی صحبت شود، تا در خواندن کتابهای فارسی (بخوانیم و بنویسیم)، درک مفاهیم درسی، جمله سازی، دیکته نویسی و &hellip; دچار مشکل نشوند.</span></p>
<p dir="rtl"><span lang="FA">*&nbsp;</span><span lang="FA">به فرزندتان از همین کلاس اول مسولیت بدهید. برای مثال کفش هایش را در جا کفشی قرار دهد و آنها را پاک کند، موهایش را شانه کند، لباسهایش را مرتب کند و &hellip; تا فرزند شما احساس خود ارزشمندی کند.</span></p>
<p dir="rtl"><span lang="FA">*&nbsp;</span><span lang="FA">فرزندتان را به خواندن کتابهای غیر درسی، در گروه سنی خودش، تشویق کنید.</span></p>
<p dir="rtl"><span lang="FA">*</span><span lang="FA">&nbsp;فرزندتان را عادت دهید که بهداشت فردی و اجتماعی را رعایت کند، برای مثال ناخن هایش را بگیرد، همیشه یک دستمال تمیز به همراه داشته باشد، دستهایش را با آب و صابون بشوید، از لیوان خود استفاده کند و &hellip;</span></p>',
                    'image' => 'posts\\June2023\\mwCii3modjgcTK7jCXB1.jpg',
                    'slug' => 'جشن-شکوفه-ها-در-مدارس-بیرجند',
                    'meta_description' => 'جشن شکوفه در بیرجند',
                    'meta_keywords' => 'بیرجند، شکوفه ها، مدارس',
                    'status' => 'PUBLISHED',
                    'featured' => 0,
                    'created_at' => '2023-06-21 15:20:25',
                    'updated_at' => '2023-06-22 09:39:58',
                ),
                1 => 
                array (
                    'id' => 6,
                    'author_id' => 1,
                    'category_id' => 1,
                    'title' => 'ارائه دست سازه‌های هنرجویان در نمایشگاهی از جنس توانمندی',
                    'seo_title' => 'ارائه دست سازه‌های هنرجویان در نمایشگاهی از جنس توانمندی',
                    'excerpt' => 'ارائه محصولات دست ساز دانش آموزان می‌تواند به عنوان عاملی مهم در رشد هنر‌های آنان نقش ایفا کند. این بار هنرجویان هنرستان عقیله بنی هاشم قاین، دست سازه‌های خود را که حاصل توانمندی‌های آن‌ها است را در نمایشگاهی عرضه کردند',
                    'body' => '<p style="text-align: right;">ارائه محصولات دست ساز دانش آموزان می&zwnj;تواند به عنوان عاملی مهم در رشد هنر&zwnj;های آنان نقش ایفا کند.</p>
<p style="text-align: right;">این بار هنرجویان هنرستان عقیله بنی هاشم قاین، دست سازه&zwnj;های خود را که حاصل توانمندی&zwnj;های آن&zwnj;ها است را در نمایشگاهی عرضه کردند.</p>
<p style="text-align: right;">محصولات ارائه شده حاصل کار هنرجویان در زمینه&zwnj;های&nbsp;<strong>صنایع دستی</strong>، هنری، فرهنگی و فنی است.</p>
<p style="text-align: right;"><strong>حضور هنرجویان با هنرهایی متفاوت</strong></p>
<p style="text-align: right;">یکی از هنرجویان حاضر در این نمایشگاه گفت: محصولات عرضه شده از سوی ما، حوله&zwnj;های دستباف بوده که حاصل مهارت آموخته شده است.</p>
<p style="text-align: right;">او گفت: رنگ آمیزی حوله&zwnj;ها نیز با رنگ&zwnj;های طبیعی انجام شده است و در این نمایشگاه نیز استقبال خوبی از آن شد.</p>
<hr>
<p style="text-align: right;">بیشتر بخوانید</p>
<ul style="text-align: right;">
<li><a class="tag_title" title="دوره&zwnj;های آموزش رایگان هنر ویژه مناطق محروم، کمتر توسعه یافته و مرزی از ۹ بهمن ماه در خراسان جنوبی شروع می&zwnj;شوند." href="https://www.yjc.ir/fa/news/8042916/%D9%87%D9%86%D8%B1-%D8%AF%D9%88%D8%B3%D8%AA%D8%A7%D9%86-%D9%85%D9%86%D8%AA%D8%B8%D8%B1-%D8%AF%D9%88%D8%B1%D9%87-%D9%87%D8%A7%DB%8C-%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C-%D8%B1%D8%A7%DB%8C%DA%AF%D8%A7%D9%86-%D8%A8%D8%A7%D8%B4%D9%86%D8%AF" target="_blank" rel="noopener">هنر دوستان منتظر دوره های آموزشی رایگان باشند</a></li>
</ul>
<hr>
<p style="text-align: right;">یکی دیگر از هنرجویان گفت: سوخت نگاری، بافتنی و پته دوزی از جمله هنر&zwnj;هایی است که فرا گرفته ایم و محصولاتمان را در این زمینه&zwnj;ها عرضه می&zwnj;کنیم.</p>
<p style="text-align: right;">او گفت: در غرفه&zwnj;ای دیگر، کودکان از نمایش&zwnj;های عروسکی استفاده می&zwnj;کنند و می&zwnj;توانند در زمان خرید کردن اولیا، در غرفه&zwnj;ای مخصوص نقاشی بکشند.</p>
<p style="text-align: right;"><strong>حضور ۱۰۰ هنرجو در نمایشگاه</strong></p>
<p style="text-align: right;">قریشی مدیر هنرستان عقیله بنی هاشم قاین گفت: ۴ ماه برای برپایی این نمایشگاه از سوی هنرجویان و هنرآموزان تلاش شده است.</p>
<p style="text-align: right;">او گفت: محصولات این نمایشگاه حاصل کار هنرجویان و&nbsp;<a href="https://www.yjc.ir/00Y20b" target="_blank" rel="noopener">هنرآموزان&nbsp;</a>در چهار رشته کامپیوتر، خیاطی، تربیت کودک و مدیریت خانواده است.</p>
<p style="text-align: right;">قریشی گفت: ۱۰۰ هنرجوی این هنرستان در ۳۰ غرفه محصولات تولیدی خود را عرضه کرده اند.</p>',
                    'image' => 'posts\\June2023\\Dk3D3zRTpq5fZBUPAFLB.jpg',
                    'slug' => 'ارائه-دست-سازه-های-هنرجویان-در-نمایشگاهی-از-جنس-توانمندی',
                    'meta_description' => 'رائه محصولات دست ساز دانش آموزان می‌تواند به عنوان عاملی مهم در رشد هنر‌های آنان نقش ایفا کند.

این بار هنرجویان هنرستان عقیله بنی هاشم قاین، دست سازه‌های خود را که حاصل توانمندی‌های آن‌ها است را در نمایشگاهی عرضه کردند',
                    'meta_keywords' => 'دستاورد،هنرستان،بیرحند',
                    'status' => 'PUBLISHED',
                    'featured' => 0,
                    'created_at' => '2023-06-21 15:27:42',
                    'updated_at' => '2023-06-21 15:28:50',
                ),
                2 => 
                array (
                    'id' => 7,
                    'author_id' => 2,
                    'category_id' => 2,
                    'title' => 'آموزش هنر شماره دوزی',
                    'seo_title' => 'آموزش هنر شماره دوزی',
                    'excerpt' => 'هنر شماره دوزی تاریخچه طولانی دارد و خاستگاه این هنر مشخص نیست، ولی می دانیم در چین، آثار انجام شده بسیار تحسین برانگیز است. و خیلی از افراد بر این باورند که ایرانی ها، مصری ها و یونانی ها این هنر را از طریق جاده ابریشم به شرق دور منتقل کردند، و این هنر به کشورهای اروپایی نیز رسیده. و می توان گفت ایرانی ها سابقه طولانی در این زمینه دارند. هنر شماره دوزی دوختی شبیه به هنر کوبلن دوزی دارد و بر روی پارچه های درشت بافت و قابل شمارش اجرا می شود.',
                    'body' => '<article id="con">
<p>دوستان عزیز سلام به کلاس هنر شماره دوزی خوش آمدید</p>
<p>امیدوارم تا آخر ویدیو ها را ببینید و لذت ببرید</p>
<p>اول بریم با من آشنا بشید</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/pJVlNQnve4/6wg4xd4YaB/origin_config.json&amp;skin=shaka" name="معرفی استاد.m4v" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
<p>&nbsp;</p>
<p>شماره دوزی یکی از انواع دوخت های سنتی می باشد که قدمت بسیار زیادی دارد.</p>
<p>شماره دوزی یک مهارت ساده و در عین حال زیبا و تحسین برانگیز است.</p>
<p>و حتی هنر شماره دوزی به دوخت ضربدری نیز شناخته می شود. به خاطر اینکه شما یک طرح را بر روی پارچه به صورت ضربدر می دوزید و سطح پارچه را با این روش پر می کنید.</p>
<p>هنر شماره دوزی را می توان بر روی انواع لباس ها و به عنوان تابلو و ... استفاده کرد.</p>
<p dir="rtl">و همچنین با استفاده از تور شماره دوزی بر روی پارچه، می توانید کنار دستمال ها و یا حوله هاتون رو شماره دوزی کنید و همچنین سر آستین لباس یا روی شلوار لی و هر چیزی که شما می خواهید به آن زیبایی ببخشید.&nbsp;</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/pJVlNQnve4/ngVm70koQE/origin_config.json&amp;skin=shaka" name="معرفی دوره.m4v" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
<p>&nbsp;</p>
<p>پس با هم بریم خلاصه ای از جلسات را ببینیم تا با روند کلاس بیشتر آشنا شوید.</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/pJVlNQnve4/kOK6Lk4B0v/origin_config.json&amp;skin=shaka" name="تیزر شماره .mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
</article>
<div id="next_back_lesson"></div>',
                    'image' => 'posts\\June2023\\scFAlIaLdjv86D7M5PIx.jpg',
                    'slug' => 'آموزش-هنر-شماره-دوزی',
                    'meta_description' => 'آموزش هنر شماره دوزی در مدارس بیرجند',
                    'meta_keywords' => 'مدرسه، هنر، شماره دوزی',
                    'status' => 'PUBLISHED',
                    'featured' => 0,
                    'created_at' => '2023-06-22 09:44:28',
                    'updated_at' => '2023-06-22 09:56:31',
                ),
                3 => 
                array (
                    'id' => 8,
                    'author_id' => 2,
                    'category_id' => 2,
                    'title' => 'آموزش نقاشی روی کاهگل',
                    'seo_title' => 'آموزش نقاشی روی کاهگل',
                    'excerpt' => 'کاهگل در معمای ایرانی بسیار دیده شده و می توان گفت که بیشتر افراد، کاهگل را نشانه اصلی معماری در کویر می شناسند. قدمت ملات کاهگل به چهار هزار سال قمری می رسد، و رد پای آن در گوشه گوشه تاریخ دیده می شود. و حتی در بناهای دوره اسلامی از این ملات به عنوان یکی از عناصر موثر استفاده شده است. نقاشی روی کاهگل، ثمره تلاش هنرمند گنابادی، منصور مهدی زاده می باشد. که به عنوان یکی از پروژه های دانشگاهی خود کار کرده بود، و در طی چند سال با فعالیت در این هنر با ابتکاراتی توانست، نقاشی کاهگل را شخصی سازی کند.و سپس پرویز کلانتری جزو هنرمند های شاخصی می باشد که در این زمینه فعالیت داشته، و نقاشی های کاهگلی او جست و جویی است برای یک آرمانشهر، یک سرزمین موعود که مملو از آرامش، تعادل و زیبای است. البته می توان گفت آثار وی در پی نوستالژی بنا های سنتی یا روستایی ایران بوده.',
                    'body' => '<div id="step-single">
<div class="container-fluid step-area text-right">
<article id="con">
<p>دوستان عزیز سلام به کلاس هنر نقاشی روی کاهگل خوش آمدید</p>
<p>امیدوارم تا آخر ویدیو ها را ببینید و لذت ببرید</p>
<p>اول بریم با من آشنا بشید</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/6epX9MXg0E/Avy7qOQ1dK/origin_config.json&amp;skin=shaka" name="معرفی استاد.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
<p>&nbsp;</p>
<p>هنر نقاشی روی کاهگل به خاطر فضای سنتی که دارد، برای دکوراسیون های منازل و هتل ها بسیار مناسب می باشد.</p>
<p>نقاشی روی کاهگل به هنرمند حس نوستالژی می بخشد، و این هنر آمیخته به آرامش، تعادل و زیبایی است.</p>
<p>هنر نقاشی روی کاهگل یک هنر همه پسند است و هر هنرمندی با هر سلیقه ای را به سمت خود جذب می کند، استفاده از هنر کاهگلی به محیط کاری و خانه شما گرمی و اصالت خاصی می بخشد.</p>
<p>این هنر زیبا روی بوم، چوب و دیوار اجرا می شود.</p>
<p>در مورد ماندگاری نقاشی روی کاهگل باید گفت که نقاشی روی کاهگل در فضای باز را نمی توان انجام داد. چون بر اثر برف و باران آسیب جدی می بیند.</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/6epX9MXg0E/dyPK39xQZq/origin_config.json&amp;skin=shaka" name="معرفی دوره.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
<p>&nbsp;</p>
<p>پس با هم بریم خلاصه ای از جلسات را ببینیم تا با روند کلاس بیشتر آشنا شوید.</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/6epX9MXg0E/A9GZ1dqnDW/origin_config.json&amp;skin=shaka" name="Teaser.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
</article>
</div>
</div>',
                    'image' => 'posts\\June2023\\ZqmKMjxydswEHFEAvoVU.jpg',
                    'slug' => 'آموزش-نقاشی-روی-کاهگل',
                    'meta_description' => 'آموزش نقاشی روی کاهگل در مدارس بیرجند',
                    'meta_keywords' => 'آموزش، نقاشی، کاهگل',
                    'status' => 'PUBLISHED',
                    'featured' => 0,
                    'created_at' => '2023-06-22 09:48:45',
                    'updated_at' => '2023-06-22 09:48:45',
                ),
                4 => 
                array (
                    'id' => 9,
                    'author_id' => 2,
                    'category_id' => 2,
                'title' => 'آموزش گلدوزی با دست (دوره پیشرفته)',
                'seo_title' => 'آموزش گلدوزی با دست (دوره پیشرفته)',
                    'excerpt' => 'گلدوزی در ایران، تاریخ طولانی و محبوبیت بسیاری دارد، گلدوزی یعنی یک طرح و نقش را با سوزن و نخ مخصوص بر روی پارچه بدوزند. و از زمان های گذشته، پوشاک خود را مانند شلوار، دامن و ... با نقش های مختلف می پوشاندند. قدیمی ترین نمونه های گلدوزی شده ایرانی، متعلق به زمان سلجوقیان می باشد. گلدوزی در زمان قدیم برای نشان دادن قدرت و ثروت شخص بود و پارچه های تزیین شده را از دیوار آویزان می کردند. طرح های گلدوزی در زمان گذشته تحت تاثیر فرهنگ، مذهب و نماد هر منطقه بوده و به همین دلیل نقش های گلدوزی در قدیم بسیار متنوع و با توجه به فرهنگ آن منطقه دوخته می شده. و هر طرح معنا و مفهومی داشت که برای دور کردن بلا و خطر دوخته می شده، مانند نقش جانوران بر روی لباس های مردمان ترکمن که نشان از دفع کردن اتفاقات بد بود بر روی پارچه گلدوزی می کردند.',
                    'body' => '<div id="step-single">
<div class="container-fluid step-area text-right">
<article id="con">
<p>دوستان عزیز سلام به کلاس هنر گلدوزی با دست(دروه پیشرفته) خوش آمدید</p>
<p>امیدوارم تا آخر ویدیو ها را ببینید و لذت ببرید</p>
<p>اول بریم با من آشنا بشید</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/0WzmawvOZo/5MO8OBAxzR/origin_config.json&amp;skin=shaka" name="معرفی استاد.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
<p>&nbsp;</p>
<p>گلدوزی با دست یکی از هنرهایی است که می توانید به راحتی آن را یاد بگیرید و با استفاده از این هنر زیبا، به تزیین پارچه های مختلف بپردازید و جلوه خاصی به منزل و پوشاک و ... خود ببخشید.</p>
<p dir="rtl">&nbsp;امروزه هنر گلدوزی در سراسر جهان، علاقمندان و هنرمندان زیادی را مجذوب خود کرده و به خاطر ابزارهای ساده و در دسترسی که دارد (مثل پارچه گلدوزی، نخ گلدوزی و کارگاه گلدوزی)، طرفداران زیادی دارد. هنر گلدوزی به دو صورت گلدوزی با دست و گلدوزی با چرخ انجام می شود که هر کدام نکات مثبت و منفی خود را دارد و می توان گفت هنر زیبای گلدوزی به هر نحوی زیباست.</p>
<p dir="rtl">&nbsp;در این دوره من به شما از طراحی و انتقال طرح بر روی پارچه و نحوه گلدوزی را به شما آموزش می دهم و شما هنرمندان عزیز در پایان دوره می توانید انواع طرح ها را اجرا کنید.</p>
<p dir="rtl">پس تا پایان دوره همراه من باشید.</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/0WzmawvOZo/3NY9PX9dPJ/origin_config.json&amp;skin=shaka" name="معرفی دوره پیشرفته.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
<p dir="rtl">&nbsp;</p>
<p>پس با هم بریم خلاصه ای از جلسات را ببینیم تا با روند کلاس بیشتر آشنا شوید.</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/0WzmawvOZo/8deEBqzwxL/origin_config.json&amp;skin=shaka" name="Teaser.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
</article>
<div id="next_back_lesson">
<p>&nbsp;</p>
</div>
</div>
</div>',
                    'image' => 'posts\\June2023\\KVftyP1Ycbsl7lESjzdI.jpg',
                    'slug' => 'آموزش-گلدوزی-با-دست-دوره-پیشرفته',
                'meta_description' => 'آموزش گلدوزی با دست (دوره پیشرفته) در بیرجند',
                    'meta_keywords' => 'آموزش، گلدوزی ، بیرجند',
                    'status' => 'PUBLISHED',
                    'featured' => 0,
                    'created_at' => '2023-06-22 09:51:15',
                    'updated_at' => '2023-06-22 09:51:15',
                ),
                5 => 
                array (
                    'id' => 10,
                    'author_id' => 2,
                    'category_id' => 2,
                    'title' => 'آموزش هنر نقاشی روی چوب',
                    'seo_title' => 'آموزش هنر نقاشی روی چوب',
                    'excerpt' => 'نقاشی روی چوب در دوران باستان بسیار رواج داشته، اما به دلیل اینکه چوب مقاوت کمی دارد، این آثار زیاد دوام نیاورده. البته می توان گفت که نقاشی روی چوب مقاومت بیشتری نسبت به کاغذ و مقوا دارد. یکی از مکان هایی که در حوزه نقاشی روی چوب فوق العاده کار کرده، آرامگاهی در استان افیون ترکیه است، این آرامگاه ۲۴۰۰ سال قدمت دارد. افراد هنرمند سطوح زیادی را برای نقاشی انتخاب می کنند و یکی از این موارد چوب می باشد.برای نقاشی روی چوب شمامی توانید از رنگ اکریلیک، گواش، رنگ روغن و ... استفاده کنید.هنرمندان با استفاده از نقاشی روی چوب ساده ترین ابزار چوبی را با رنگ های مختلف به زیبایی تزیین می کنند و به آن جلوه و نمای خاصی می بخشند.',
                    'body' => '<div id="step-single">
<div class="container-fluid step-area text-right">
<article id="con">
<p>دوستان عزیز سلام به کلاس هنر نقاشی روی چوب خوش آمدید</p>
<p>امیدوارم تا آخر ویدیو ها را ببینید و لذت ببرید</p>
<p>اول بریم با من آشنا بشید</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/a9P0nO25vG/lnMDdAowe0/origin_config.json&amp;skin=shaka" name="معرفی استااد.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
<p>&nbsp;</p>
<p>دوره نقاشی روی چوب، جزو اون هنر های پر طرفدار است که روی انواع وسایل چوبی جدید یا قدیمی اجرا می شود و شما &zwnj;می&zwnj;توانید برای نو یا متمایز کردن وسایل قدیمی و کهنه از این هنر استفاده کنید.</p>
<p>نقاشی روی چوب را می توانید با انواع رنگ ها بر روی چوب اجرا کنید و هیچ محدودیتی در این زمینه ندارید.</p>
<p>برای نقاشی روی چوب شما می توانید از چوب خام استفاده کنید، اما نیاز به بتونه کاری و سنباده کشی دارید و هم از ابزار های چوبی آماده مانند سینی، قندان، تخت سرو و... که نیازی به زیر سازی ندارد، می توانید استفاده کنید.</p>
<p>در این دوره من سعی کردم تمامی آموزش ها را از انتقال طرح تا رنگ آمیزی و فیکس کردن رنگ به شما آموزش دهم.</p>
<p>شما بعد از این دوره می توانید به راحتی تمامی وسایل های چوبی خود را تزیین کنید و با رنگ آمیزی به آن جلوه خاصی بخشید.</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/a9P0nO25vG/Xq2VogVojB/origin_config.json&amp;skin=shaka" name="معرفی دوره.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
<p>&nbsp;</p>
<p>پس با هم بریم خلاصه ای از جلسات را ببینیم تا با روند کلاس بیشتر آشنا شوید.</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/a9P0nO25vG/2kPROX81L4/origin_config.json&amp;skin=shaka" name="Teaser.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
</article>
</div>
</div>',
                    'image' => 'posts\\June2023\\ef2RCL7clqDUXzVoOoop.jpg',
                    'slug' => 'آموزش-هنر-نقاشی-روی-چوب',
                    'meta_description' => 'آموزش هنر نقاشی روی چوب در بیرجند برگزار شد',
                    'meta_keywords' => 'آموزش، هنر، نقاشی، چوب',
                    'status' => 'PUBLISHED',
                    'featured' => 0,
                    'created_at' => '2023-06-22 09:53:46',
                    'updated_at' => '2023-06-22 09:53:46',
                ),
                6 => 
                array (
                    'id' => 11,
                    'author_id' => 2,
                    'category_id' => 2,
                    'title' => 'آموزش هنر جواهر دوزی',
                    'seo_title' => 'آموزش هنر جواهر دوزی',
                    'excerpt' => 'با آموزش جواهر دوزی از پایه تا پیشرفته به صورت حرفه ای در خدمت شما هنرمندان هستیم .  در آموزش‌های قبلی با گلدوزی، منجوق بافی و زیورآلات دست‌ساز در خدمت شما بودیم، جالب است بدانید که هنر جواهر دوزی به گونه‌ای ترکیبی از این چند هنر به شمار می آید، چرا که در آن از منجوق، سنگ، مروارید و ... استفاده می‌شود و هر کدوم از این اجزا با استفاده از نخ و سوزن روی یک سطح نمدی یا چرمی دوخته می‌شوند و بعد از آن با نصب سوزن پیکسل یا گیره به عنوان اشیا تزئینی و یا سنجاق سینه روی لباس یا کیف مورد استفاده قرار می‌گیرد.',
                    'body' => '<div id="step-single">
<div class="container-fluid step-area text-right">
<article id="con">
<p>دوستان عزیز سلام به کلاس هنر جواهر دوزی خوش آمدید</p>
<p>امیدوارم تا آخر ویدیو ها را ببینید و لذت ببرید</p>
<p>اول بریم با من آشنا بشید</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/Z9reXRLvV7/eQPZ4XZjOA/origin_config.json&amp;skin=shaka" name="معرفی استاد.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
<p>&nbsp;</p>
<p>یکی از هنرهایی که این روزها به خصوص تو جوامع ایرانی بسیار پر طرفدار شده، هنر جواهر دوزی است که در ساخت انواع و اقسام پیکسل ها و دکمه های زینتی و حتی تزئین لباس، کیف و کفش کاربرد دارد.</p>
<p>البته هنر جواهر دوزی روی لباس، در تزئین لباس، شال و مانتو هم به کار گرفته می&zwnj;شود و میتوان بدون نیاز به یک سطح جدا مستقیما آن را روی پارچه لباس پیاده کرد.</p>
<p>در این دوره من سعی کردم انواع دوخت منجوق، ملیه و ملیله شکسته، پولک، سنگ و ... را به شما آموزش دهم .</p>
<p>بعد از آموزش انواع دوخت، شروع می کنیم به ساخت یک پیکسل زیبا، که بعد از آن بتوانید انواع مدل ها را به راحتی بدوزید.</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/Z9reXRLvV7/Aw5meZnvOG/origin_config.json&amp;skin=shaka" name="معرفی دوره.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
<p>&nbsp;</p>
<p>پس بریم با هم خلاصه ای از کلاس را ببینیم تا با روند کلاس بیشتر آشنا شوید</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/Z9reXRLvV7/1dxyOeQBP0/origin_config.json&amp;skin=shaka" name="تیزر  ادیت شده جواهر دوزی" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
</article>
<div id="next_back_lesson">
<ul>
<li>&nbsp;</li>
<li><a class="btn btn-outline-dark" href="https://honari.com/academy/courses/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D9%87%D9%86%D8%B1-%D8%AC%D9%88%D8%A7%D9%87%D8%B1-%D8%AF%D9%88%D8%B2%DB%8C/%D8%AC%D9%84%D8%B3%D9%87-%D8%A7%D9%88%D9%84-%D9%85%D8%B9%D8%B1%D9%81%DB%8C-%D8%A7%D8%A8%D8%B2%D8%A7%D8%B1-%D9%88-%D9%85%D8%AA%D8%B1%DB%8C%D8%A7%D9%84-%D8%AC%D9%88%D8%A7%D9%87%D8%B1-%D8%AF%D9%88%D8%B2%DB%8C">جلسه بعدی</a></li>
</ul>
</div>
</div>
</div>',
                    'image' => 'posts\\June2023\\R7gptOsB8gDnnd2NZRgQ.jpg',
                    'slug' => 'آموزش-هنر-جواهر-دوزی',
                    'meta_description' => 'آموزش هنر جواهر دوزی در بیرجند',
                    'meta_keywords' => 'آموزش، هنر ،جواهر دوزی',
                    'status' => 'PUBLISHED',
                    'featured' => 0,
                    'created_at' => '2023-06-22 09:58:21',
                    'updated_at' => '2023-06-22 09:58:21',
                ),
                7 => 
                array (
                    'id' => 12,
                    'author_id' => 2,
                    'category_id' => 2,
                    'title' => 'آموزش گل دکوراتیو کاغذی با مقوا',
                    'seo_title' => 'آموزش گل دکوراتیو کاغذی با مقوا',
                    'excerpt' => 'گل های دکوراتیو کاغذی از این جهت مورد توجه قرار گرفت که شما می توانید طرح هایی با قسمت هایی برجسته داشته باشید که جذابیت 
صری بیشتری دارد و با سایه اندازی که دارد شما می توانید یک دکور جذاب و چشمگیری را برای مخاطب خود ایجاد کنید. این هنر در کشور های دیگر بسیار مرسوم بوده و به تازگی وارد ایران شده و تعداد افراد محدودی هستند که این مهارت را توانستند کسب کنند.در این هنر استفاده از جزییات و به کارگیری آن در کارتان باعث می شود، مخاطب مجذوب کار شما شود.',
                    'body' => '<div id="step-single">
<div class="container-fluid step-area text-right">
<article id="con">
<p>به دوره ساخت گل های دکوراتیو کاغذی خوش آمدید، امیدوارم تا آخر ویدیو ها را ببینید و لذت ببرید</p>
<p>اول بریم که با من آشنا بشید</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/RNmQ83XEp2/lnyxd8xkDm/origin_config.json&amp;skin=shaka" name="معرفی استاد.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
<p>&nbsp;</p>
<p>گل های دکوراتیو کاغذی به این جهت مورد توجه قرار گرفته که شما با انتخاب درست رنگ و چیدمان آن می توانید یک دکور جذاب و چشمگیری را برای مخاطب خود ایجاد کنید</p>
<p>و شما می توانید بعد از این دوره ایده پرداز کار های خود باشید</p>
<p>و این هنر به دلیل استفاده از ابزار هایی که به راحتی تهیه می شود و قیمت مناسب دارد، یکی از پر کاربرد ترین هنر ها می باشد</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/RNmQ83XEp2/lNbK56Jm9Q/origin_config.json&amp;skin=shaka" name="معرفی دوره.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
<p>&nbsp;</p>
<p>بعد از آشنایی با این دوره، حالا می توانید خلاصه ای از جلسات را ببینید تا بیشتر با این هنر جذاب آشنا شوید</p>
<div class="r1_iframe_embed"><iframe src="https://player.arvancloud.ir/index.html?config=https://honari.arvanvod.ir/RNmQ83XEp2/wNO23q6JXY/origin_config.json&amp;skin=shaka" name="teaser.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
</article>
<div id="next_back_lesson">
<ul>
<li>&nbsp;</li>
<li><a class="btn btn-outline-dark" href="https://honari.com/academy/courses/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%DA%AF%D9%84-%D9%87%D8%A7%DB%8C-%D8%AF%DA%A9%D9%88%D8%B1%D8%A7%D8%AA%DB%8C%D9%88-%DA%A9%D8%A7%D8%BA%D8%B0%DB%8C/%D8%AC%D9%84%D8%B3%D9%87-%D8%A7%D9%88%D9%84-%D9%85%D8%B9%D8%B1%D9%81%DB%8C-%D8%A7%D8%A8%D8%B2%D8%A7%D8%B1-%D9%88-%D9%85%D8%AA%D8%B1%DB%8C%D8%A7%D9%84-%DA%AF%D9%84-%D9%87%D8%A7%DB%8C-%D8%AF%DA%A9%D9%88%D8%B1%D8%A7%D8%AA%DB%8C%D9%88">جلسه بعدی</a></li>
</ul>
</div>
</div>
</div>',
                    'image' => 'posts\\June2023\\vyuTwwmNqPOPC716rVrk.jpg',
                    'slug' => 'آموزش-گل-دکوراتیو-کاغذی-با-مقوا',
                    'meta_description' => 'آموزش گل دکوراتیو کاغذی با مقوا در بیرجند',
                    'meta_keywords' => 'آموزش، گل، دکوراتیو، کاغذی',
                    'status' => 'PUBLISHED',
                    'featured' => 0,
                    'created_at' => '2023-06-22 10:00:44',
                    'updated_at' => '2023-06-22 10:00:44',
                ),
                8 => 
                array (
                    'id' => 13,
                    'author_id' => 2,
                    'category_id' => 1,
                    'title' => 'برگذاری وبینار رنگ شناسی در هنرستان البرز',
                    'seo_title' => 'برگذاری وبینار رنگ شناسی در هنرستان البرز',
                    'excerpt' => 'اگر قصد دارید ظروف سفالی خانه خود را رنگ کنید، ابتدا باید در انتخاب نوع رنگ و کاربرد آن دقت بسیاری داشته باشید. برای اطلاع از نحوه رنگ‌ کردن سفال به ویژه ظروف سفالی، به موضوع «رنگ‌ آمیزی سفال» بپردازیم. این مقاله تلاش دارد تا در کنار معرفی انواع رنگ‌های مناسب برای رنگ‌آمیزی سفال، به سوالات ضروری و مهم درباره رنگ مناسب ظروف سفالی پاسخ دهد. برای خواندن ادامه مطلب، مجله مینیاتور را دنبال کنید.',
                    'body' => '<h2 class="wp-block-heading"><strong>رنگ مناسب برای سفال</strong></h2>
<p>یکی از سوالات متداول درباره ظروف سفالی، نحوه رنگ کردن آن است. اینکه چه نوع رنگی مناسب سفال است و چگونه می&zwnj;توان از بین انواع رنگ&zwnj;ها، رنگ مناسب آن را پیدا کرد.&nbsp;<a href="https://miniatureiran.com/blog" target="_blank" rel="noreferrer noopener">مجله مینیاتور</a>&nbsp;قصد دارد در ادامه این مقاله به انواع رنگ مناسب سفال اشاره کند تا خانواده&zwnj;های ایرانی بتوانند انتخاب درست و کاربردی برای رنگ&zwnj;آمیزی ظروف سفالی خود داشته باشند.</p>
<div class="wp-block-image">
<figure class="aligncenter size-large"><img class="wp-image-1844" src="https://miniatureiran.com/blog/wp-content/uploads/2022/10/various-ceramic-vases-with-paint-pottery-concept_23-2148679161-1024x682.jpg" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://miniatureiran.com/blog/wp-content/uploads/2022/10/various-ceramic-vases-with-paint-pottery-concept_23-2148679161-1024x682.jpg 1024w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/various-ceramic-vases-with-paint-pottery-concept_23-2148679161-300x200.jpg 300w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/various-ceramic-vases-with-paint-pottery-concept_23-2148679161-768x512.jpg 768w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/various-ceramic-vases-with-paint-pottery-concept_23-2148679161.jpg 1060w" alt="سفال&zwnj;های رنگ شده" width="1024" height="682"></figure>
</div>
<p><br>انواع رنگ مناسب سفال به ۶ دسته تقسیم&zwnj;بندی می&zwnj;شود که عبارتند از: ۱- رنگ اکریلیک ۲- رنگ روغنی ۳- رنگ پلاستیک ۴- رنگ گواش ۵- اسپری رنگ ۶- لاک ناخن.</p>
<h3 class="wp-block-heading"><span id="%DB%B1-_%D8%B1%D9%86%DA%AF_%D8%A2%D9%85%DB%8C%D8%B2%DB%8C_%D8%B3%D9%81%D8%A7%D9%84_%D8%A8%D8%A7_%D8%B1%D9%86%DA%AF_%D8%A7%DA%A9%D8%B1%DB%8C%D9%84%DB%8C%DA%A9" class="ez-toc-section"></span><strong>۱- رنگ آمیزی سفال</strong><strong>&nbsp;با رنگ اکریلیک</strong></h3>
<ul>
<li><a href="https://miniatureiran.com/products/rang/akrilik" target="_blank" rel="noreferrer noopener">رنگ اکریلیک</a>&nbsp;بهترین گزینه&zwnj; برای رنگ کردن ظروف سفالی است.</li>
<li>استحکام و دوام بالایی دارد.</li>
<li>به سرعت خشک می&zwnj;شود.</li>
<li>ترکیب سمی و مضر برای بدن انسان و محیط ندارد.</li>
<li>پس از خشک شدن لایه اول رنگ&zwnj;آمیزی بر روی سفال، می&zwnj;توانید آن را بشویید.</li>
<li>اجرای آن آسان و ساده است.</li>
<li>قیمت مناسبی دارد.</li>
</ul>
<h2 class="wp-block-heading"><span id="%D8%A2%D9%85%D9%88%D8%B2%D8%B4_%D9%86%D9%82%D8%A7%D8%B4%DB%8C_%D8%B1%D9%88%DB%8C_%D8%B3%D9%81%D8%A7%D9%84_%D8%A8%D8%A7_%D8%B1%D9%86%DA%AF_%D8%A7%DA%A9%D8%B1%DB%8C%D9%84%DB%8C%DA%A9" class="ez-toc-section"></span><strong>آموزش نقاشی روی سفال با رنگ اکریلیک</strong></h2>
<p>۱- ابتدا وسایل لازم را برای نقاشی روی سفال با رنگ اکریلیک از نزدیک&zwnj;ترین فروشگاه رنگ تهیه کنید. وسایل لازم شامل رنگ، چسب چوب، مداد، قلم &zwnj;مو، سنباده نرم و کاربن است. شما می&zwnj;توانید به صورت اینترنتی، ابزارهای با کیفیت و مقرون به صرفه برای نقاشی روی سفال با رنگ اکریلیک را از&nbsp;<a href="https://miniatureiran.com/">فروشگاه رنگ چسب و ابزار مینیاتور</a>&nbsp;خریداری کنید.</p>
<p>۲- ابتدا کاور رنگ را پهن کنید تا محیط و وسایل اطراف کثیف نشود. برای اینکه بتوانید نقاشی روی سفال با رنگ اکریلیک به بهترین شکل ممکن انجام شود، سفال را به دقت نگاه کنید تا هیچگونه ترک یا شکستگی بر روی آن وجود نداشته باشد.</p>
<ul>
<li><a href="https://miniatureiran.com/blog/stone-structure-painting-training/" target="_blank" rel="noreferrer noopener" data-type="URL" data-id="https://miniatureiran.com/blog/stone-structure-painting-training/">آموزش رنگ&zwnj;آمیزی سازه سنگی</a></li>
</ul>
<ul>
<li><a href="https://miniatureiran.com/blog/teaching-how-to-make-golden-color/" target="_blank" rel="noreferrer noopener" data-type="URL" data-id="https://miniatureiran.com/blog/teaching-how-to-make-golden-color/">آموزش ساخت رنگ طلایی</a></li>
</ul>
<p>۳- گردوغبار و کثیفی روی سفال را با پارچه یا قلم مو تمیز کنید.</p>
<p>۴- پیش از رنگ&zwnj; کردن سفال، سطح آن را سنباده نرم بزنید تا کاملا صاف و صیقلی شود. پس از تمیز کردن، نوبت به اجرای چسب چوب رقیق شده بر روی سطح سفال است. اجازه دهید چسب چوب خشک شود.</p>
<p>۵- برای اجرای نقاشی روی سفال، نیاز به کاربن دارید. سعی کنید از کاربن هم&zwnj;رنگ سفال استفاده نمایید. ۶- طرح مورد نظر خود را با مداد بر روی کاربن بکشید و سپس رنگ بزنید. برای خرید&nbsp;<a href="https://miniatureiran.com/products/rang/akrilik">رنگ اکریلیک</a>&nbsp;مخصوص نقاشی روی سفال، به وب سایت&nbsp;<a href="https://miniatureiran.com/">فروشگاه اینترنتی رنگ، چسب و ابزار مینیاتور</a>&nbsp;مراجعه کنید.</p>
<div class="wp-block-image">
<figure class="aligncenter size-large"><a href="https://miniatureiran.com/"><img class="wp-image-2316 b-loaded" src="https://miniatureiran.com/blog/wp-content/uploads/2022/10/Untitled-1-1024x243.jpg" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://miniatureiran.com/blog/wp-content/uploads/2022/10/Untitled-1-1024x243.jpg 1024w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/Untitled-1-300x71.jpg 300w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/Untitled-1-768x182.jpg 768w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/Untitled-1.jpg 1280w" alt="تماس با ما" width="1024" height="243"></a></figure>
</div>
<p>&nbsp;</p>
<h3 class="wp-block-heading"><span id="%DB%B2-_%D8%B1%D9%86%DA%AF_%D8%A2%D9%85%DB%8C%D8%B2%DB%8C_%D8%B3%D9%81%D8%A7%D9%84_%D8%A8%D8%A7_%D8%B1%D9%86%DA%AF_%D8%B1%D9%88%D8%BA%D9%86%DB%8C" class="ez-toc-section"></span><strong>۲- رنگ آمیزی سفال با رنگ روغنی</strong></h3>
<ul>
<li><a href="https://miniatureiran.com/products/rang/roghani" target="_blank" rel="noreferrer noopener">رنگ روغنی</a>&nbsp;برای استفاده در ظروف سفالی مخصوص آب و غذا مناسب نیست.</li>
<li>حلال این نوع رنگ، تینر است.</li>
<li>دوام و استحکام بالایی دارد.</li>
<li>سرعت خشک شدن بالا</li>
<li>ضدآب است و می&zwnj;توانید به راحتی تحت هر شرایطی آن را بشویید.</li>
<li>عدم سازگاری با محیط زیست</li>
</ul>
<div class="wp-block-image">
<figure class="aligncenter size-large"><img class="wp-image-1948" src="https://miniatureiran.com/blog/wp-content/uploads/2022/10/Sofal-Back-Sefid-Logo-1-1024x436.jpg" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://miniatureiran.com/blog/wp-content/uploads/2022/10/Sofal-Back-Sefid-Logo-1-1024x436.jpg 1024w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/Sofal-Back-Sefid-Logo-1-300x128.jpg 300w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/Sofal-Back-Sefid-Logo-1-768x327.jpg 768w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/Sofal-Back-Sefid-Logo-1.jpg 1280w" alt="انواع رنگ سفال و جدول ویژگی&zwnj;های آن&zwnj;ها" width="1024" height="436" loading="lazy"></figure>
</div>
<h3 class="wp-block-heading"><span id="%DB%B3-_%D8%B1%D9%86%DA%AF_%D8%A2%D9%85%DB%8C%D8%B2%DB%8C_%D8%B3%D9%81%D8%A7%D9%84_%D8%A8%D8%A7_%D8%B1%D9%86%DA%AF_%D9%BE%D9%84%D8%A7%D8%B3%D8%AA%DB%8C%DA%A9" class="ez-toc-section"></span><strong>۳-&nbsp;رنگ آمیزی سفال&nbsp;با رنگ پلاستیک</strong></h3>
<ul>
<li><a href="https://miniatureiran.com/products/rang/pelastik" target="_blank" rel="noreferrer noopener">رنگ پلاستیک</a>&nbsp;انسجام و دوام بالایی دارد.</li>
<li>درصد سمی بودن پایینی دارد.</li>
<li>این رنگ بو ندارد.</li>
<li>قابل شست&zwnj;وشو است.</li>
<li>سطح رنگ صاف و شفاف است.</li>
<li>مقاوم در برابر نور خورشید</li>
<li>ترک نمی&zwnj;خورد.</li>
<li>سرعت خشک شدن بالایی دارد.</li>
<li>بافت رنگ آن&zwnj;ها نرم است.</li>
</ul>
<h3 class="wp-block-heading"><span id="%DB%B4-_%D8%B1%D9%86%DA%AF_%D8%A2%D9%85%DB%8C%D8%B2%DB%8C_%D8%B3%D9%81%D8%A7%D9%84_%D8%A8%D8%A7_%D8%B1%D9%86%DA%AF_%DA%AF%D9%88%D8%A7%D8%B4" class="ez-toc-section"></span><strong>۴-&nbsp;رنگ آمیزی سفال&nbsp;با رنگ گواش</strong></h3>
<ul>
<li>این نوع رنگ برای تزئین یا نقاشی ظروف سفالی استفاده می&zwnj;شود.</li>
<li>برای رنگ کردن سفال با رنگ گواش، از قلم مو سر گرد و تخت شماره صفر، سه و چهار استفاده کنید.</li>
</ul>
<h3 class="wp-block-heading"><span id="%D9%86%D9%82%D8%A7%D8%B4%DB%8C_%D8%B1%D9%88%DB%8C_%D8%B3%D9%81%D8%A7%D9%84_%D8%A8%D8%A7_%DA%AF%D9%88%D8%A7%D8%B4" class="ez-toc-section"></span><strong>نقاشی روی سفال با گواش</strong></h3>
<p>۱- برای نقاشی روی سفال با گواش ابتدا وسایل لازم شامل گواش، اسپری براق&zwnj;کننده، آب، مداد، قلم مو، سنباده، پارچه و &hellip;را از نزدیک&zwnj;ترین فروشگاه رنگ&nbsp; و ابزار تهیه کنید. شما می&zwnj;توانید وسایل با کیفیت مورد نیاز خود را به صورت اینترنتی از فروشگاه رنگ چسب و ابزار مینیاتور خریداری کنید.</p>
<p>۲- ابتدا کاور رنگ را پهن کنید تا محیط و وسایل اطراف کثیف نشود. برای اینکه بتوانید نقاشی روی سفال با رنگ سفال به بهترین شکل ممکن انجام شود، سفال را به دقت نگاه کنید تا هیچگونه ترک یا شکستگی بر روی آن وجود نداشته باشد.</p>
<p>۳- پیش از نقاشی روی سفال با گواش، گردوغبار روی سفال را با پارچه تمیز کنید.</p>
<p>۴- سطح آن را سنباده نرم بزنید.</p>
<p>۵- طرح خود را با مداد بر روی سفال بکشید.</p>
<p>۶- رنگ گواش را با مقدار لازم آب ترکیب کنید. به وسیله قلم مو، روی سفال را نقاشی کنید و پس از خشک شدن، بر روی آن اسپری براق&zwnj;کننده بزنید. اسپری براق&zwnj;کننده برای فیکس کردن رنگ بر روی سفال است تا از این طریق، رنگ سفال خاصیت ضد آب پیدا کند.</p>
<p>برای خرید ابزارهای رنگ&zwnj;آمیزی با گواش، به وب سایت&nbsp;<a href="https://miniatureiran.com/">فروشگاه اینترنتی رنگ، چسب و ابزار مینیاتور</a>&nbsp;مراجعه کنید.</p>
<p>&nbsp;</p>
<div class="wp-block-image">
<figure class="aligncenter size-full"><a href="https://miniatureiran.com/products/rang" target="_blank" rel="noreferrer noopener"><img class="wp-image-2507 b-loaded" src="https://miniatureiran.com/blog/wp-content/uploads/2022/11/18.gif" alt="خرید محصول" width="500" height="120"></a></figure>
</div>
<p>&nbsp;</p>
<h3 class="wp-block-heading"><span id="%DB%B5-_%D8%B1%D9%86%DA%AF_%D8%A2%D9%85%DB%8C%D8%B2%DB%8C_%D8%B3%D9%81%D8%A7%D9%84_%D8%A8%D8%A7_%D8%A7%D8%B3%D9%BE%D8%B1%DB%8C_%D8%B1%D9%86%DA%AF" class="ez-toc-section"></span>۵-&nbsp;<strong>رنگ آمیزی سفال&nbsp;با اسپری رنگ</strong></h3>
<ul>
<li>برای نقاطی که نمی&zwnj;توانید از&nbsp;<a href="https://miniatureiran.com/products/ghaltak-ghalam-malzomat/ghalam" target="_blank" rel="noreferrer noopener">قلم مو</a>&nbsp;استفاده کنید،&nbsp;<a href="https://miniatureiran.com/products/rang/speray" target="_blank" rel="noreferrer noopener" data-type="URL" data-id="https://miniatureiran.com/products/rang/speray">اسپری رنگ</a>&nbsp;بهترین گزینه است.</li>
<li>پوشش&zwnj;دهی بالایی دارد.</li>
<li>ماندگاری بالایی در برابر محیط دارد.</li>
<li>در برابر آب مقاوم است.</li>
<li>بافت سفال را صاف و براق می&zwnj;کند.</li>
<li>اجرای آن با سرعت بالایی انجام می&zwnj;شود.</li>
<li>پیش از رنگ&zwnj;آمیزی با اسپری،&zwnj; سطوحی که نیاز به رنگ ندارند را با&nbsp;<a href="https://miniatureiran.com/products/chasb/kaghazi" target="_blank" rel="noreferrer noopener" data-type="URL" data-id="https://miniatureiran.com/products/chasb/kaghazi">چسب کاغذی</a>&nbsp;یا روزنامه بپوشانید.</li>
<li>حین اجرای اسپری رنگ، از ماسک، عینک و دستکش استفاده کنید.</li>
</ul>
<h3 class="wp-block-heading"><span id="%D8%B1%D9%86%DA%AF_%DA%A9%D8%B1%D8%AF%D9%86_%D8%B8%D8%B1%D9%88%D9%81_%D8%B3%D9%81%D8%A7%D9%84%DB%8C_%D8%A8%D8%A7_%D8%A7%D8%B3%D9%BE%D8%B1%DB%8C" class="ez-toc-section"></span><strong>رنگ کردن ظروف سفالی با اسپری</strong></h3>
<ul>
<li>۱- برای رنگ کردن ظروف سفالی با اسپری، ابتدا وسایل لازم شامل اسپری رنگ، مداد، قلم مو، سنباده، پارچه و &hellip; را از نزدیک&zwnj;ترین فروشگاه رنگ&nbsp; و ابزار تهیه کنید. شما می&zwnj;توانید وسایل با کیفیت مورد نیاز خود را به صورت اینترنتی از فروشگاه رنگ چسب و ابزار مینیاتور خریداری کنید.</li>
<li>۲- ابتدا کاور رنگ را پهن کنید تا محیط و وسایل اطراف کثیف نشود. حتما توجه داشته باشید که سفال شما خط ترک نداشته باشد. گردوغبار و کثیفی روی سفال را با پارچه نخی تمیز کنید. سپس سطح آن را سنباده بزنید.</li>
<li>۳- پس از اینکه طرح خود را با مداد بر روی سفال کشیدید، نوبت به رنگ کردن ظروف سفالی با اسپری می&zwnj;رسد. برای خرید انواع&nbsp;<a href="https://miniatureiran.com/products/rang/speray">اسپری رنگ</a>&nbsp;مخصوص نقاشی روی سفال، به وب سایت&nbsp;<a href="https://miniatureiran.com/">فروشگاه اینترنتی رنگ، چسب و ابزار مینیاتور</a>&nbsp;مراجعه کنید.</li>
</ul>
<h3 class="wp-block-heading"><span id="%DB%B6-_%D8%B1%D9%86%DA%AF_%D8%A2%D9%85%DB%8C%D8%B2%DB%8C_%D8%B3%D9%81%D8%A7%D9%84_%D8%A8%D8%A7_%D9%84%D8%A7%DA%A9_%D9%86%D8%A7%D8%AE%D9%86" class="ez-toc-section"></span><strong>۶-&nbsp;رنگ آمیزی سفال&nbsp;با لاک ناخن</strong></h3>
<ul>
<li>لاک ناخن برای رنگ&zwnj;آمیزی یا نقاشی سفال کاربرد دارد.</li>
<li>بیشترین کاربرد لاک ناخن برای تولید اثر هنری بر روی سفال است.</li>
<li>برای اجرای لاک ناخن بر روی سفال، کافی است آن را با مقداری آب ترکیب کنید.</li>
<li>دوام و انسجام بالایی دارد.</li>
</ul>
<h2 class="wp-block-heading"><span id="%D9%88%D8%B3%D8%A7%DB%8C%D9%84_%D9%84%D8%A7%D8%B2%D9%85_%D8%A8%D8%B1%D8%A7%DB%8C_%D8%B1%D9%86%DA%AF_%D8%A2%D9%85%DB%8C%D8%B2%DB%8C_%D8%B3%D9%81%D8%A7%D9%84" class="ez-toc-section"></span><strong>وسایل لازم برای&nbsp;رنگ آمیزی سفال</strong></h2>
<div class="wp-block-image">
<figure class="aligncenter size-large"><img class="wp-image-1842" src="https://miniatureiran.com/blog/wp-content/uploads/2022/10/tools-pottery-table_23-2148643327-1024x682.jpg" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://miniatureiran.com/blog/wp-content/uploads/2022/10/tools-pottery-table_23-2148643327-1024x682.jpg 1024w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/tools-pottery-table_23-2148643327-300x200.jpg 300w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/tools-pottery-table_23-2148643327-768x512.jpg 768w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/tools-pottery-table_23-2148643327.jpg 1060w" alt="ابزار رنگ آمیزی سفال" width="1024" height="682" loading="lazy">
<figcaption class="wp-element-caption"></figcaption>
</figure>
</div>
<ul>
<li>ظرف سفالی</li>
<li>رنگ مورد نیاز</li>
<li>اسپری رنگ</li>
<li>سنباده نرم</li>
<li>قلم مو نوک تیز و نوک پهن</li>
<li>مداد</li>
<li><a href="https://miniatureiran.com/products/abzaralat-yaraghalat/kaver" target="_blank" rel="noreferrer noopener" data-type="URL" data-id="https://miniatureiran.com/products/abzaralat-yaraghalat/kaver">کاور رنگ</a></li>
<li>دستمال پارچه&zwnj;ای</li>
<li>چسب کاغذی و روزنامه</li>
<li>چسب چوب در صورت نیاز</li>
<li>روغن جلا برای رنگ گواش</li>
<li>اسپری تثبیت&zwnj;کننده رنگ</li>
</ul>
<h2 class="wp-block-heading"><span id="%D9%85%D8%B1%D8%A7%D8%AD%D9%84_%D8%B1%D9%86%DA%AF_%DA%A9%D8%B1%D8%AF%D9%86_%D8%B3%D9%81%D8%A7%D9%84" class="ez-toc-section"></span><strong>مراحل رنگ کردن سفال</strong></h2>
<div class="wp-block-image">
<figure class="aligncenter size-large"><img class="wp-image-1845 b-loaded" src="https://miniatureiran.com/blog/wp-content/uploads/2022/10/woman-painting-clay-pot-close-up_23-2148944906-1024x576.jpg" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://miniatureiran.com/blog/wp-content/uploads/2022/10/woman-painting-clay-pot-close-up_23-2148944906-1024x576.jpg 1024w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/woman-painting-clay-pot-close-up_23-2148944906-300x169.jpg 300w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/woman-painting-clay-pot-close-up_23-2148944906-768x432.jpg 768w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/woman-painting-clay-pot-close-up_23-2148944906.jpg 1380w" alt="رنگ کردن سفال" width="1024" height="576"></figure>
</div>
<p><br>رنگ&zwnj;آمیزی سفال با انواع رنگ، در چهار مرحله انجام می&zwnj;شود که عبارتند از: ۱- آماده&zwnj;سازی سطح مورد نظر ۲- آستر یا زیرسازی سطح مورد نظر ۳- رنگ&zwnj;آمیزی سطح مورد نظر ۴- تثبیت&zwnj;کننده رنگ</p>
<h3 class="wp-block-heading"><span id="%DB%B1-_%D8%B3%D8%B7%D8%AD_%D9%85%D9%88%D8%B1%D8%AF_%D9%86%D8%B8%D8%B1_%D8%A2%D9%85%D8%A7%D8%AF%D9%87%E2%80%8C_%DA%A9%D9%86%DB%8C%D8%AF" class="ez-toc-section"></span><strong>۱- سطح</strong>&nbsp;<strong>مورد نظر آماده&zwnj; کنید</strong></h3>
<ul>
<li>سطح ظروف سفالی را به وسیله&nbsp;<a href="https://miniatureiran.com/products/sonbade-sayesh-boresh" target="_blank" rel="noreferrer noopener">سنباده</a>&nbsp;یکدست کنید.</li>
<li>سطح سنباده شده را به وسیله دستمال پارچه&zwnj;ای یا اسفنج مرطوب تمیز کنید.</li>
<li>اجازه دهید سطح سفالی خشک شود.</li>
</ul>
<h3 class="wp-block-heading"><span id="%DB%B2-_%D8%B3%D8%B7%D8%AD_%D9%85%D9%88%D8%B1%D8%AF_%D9%86%D8%B8%D8%B1_%D8%B1%D8%A7_%D8%A2%D8%B3%D8%AA%D8%B1%DA%A9%D8%A7%D8%B1%DB%8C_%DB%8C%D8%A7_%D8%B2%DB%8C%D8%B1%D8%B3%D8%A7%D8%B2%DB%8C_%DA%A9%D9%86%DB%8C%D8%AF" class="ez-toc-section"></span><strong>۲-&nbsp;</strong><strong>سطح&nbsp;</strong><strong>مورد نظر را آسترکاری یا زیرسازی کنید</strong></h3>
<ul>
<li>برای جلوگیری از خوردگی رنگ سفال، یک لایه نازک&nbsp;<a href="https://miniatureiran.com/products/chasb/choob" target="_blank" rel="noreferrer noopener" data-type="URL" data-id="https://miniatureiran.com/products/chasb/choob">چسب چوب</a>&nbsp;رقیق&zwnj;شده با آب را بر روی سطح مورد نظر بزنید. (از پرایمر نیز می&zwnj;توانید به جای چسب چوب استفاده کنید)</li>
<li>پس از خشک شدن چسب چوب، به آرامی بر روی سطح سفال، سنباده نرم بکشید.</li>
<li>سه لایه از رنگ مورد نظر را به عنوان زیرکار بر روی سطح سفال بزنید.</li>
<li>پس از خشک شدن رنگ زیرکار، سطح مورد نظر را سنباده نرم بکشید.</li>
<li>سطح سنباده شده را به وسیله دستمال پارچه&zwnj;ای یا اسفنج مرطوب تمیز کنید.</li>
<li>نقاطی که نیاز به رنگ&zwnj;آمیزی ندارند را به وسیله چسب کاغذی، روزنامه یا پلاستیک بپوشانید.</li>
<li>اگر برای رنگ کردن سفال، طرح خاصی مدنظر دارید، بهتر است آن را به وسیله مداد و کاربن بکشید.</li>
</ul>
<h3 class="wp-block-heading"><span id="%DB%B3-_%D8%B1%D9%86%DA%AF%E2%80%8C%D8%A2%D9%85%DB%8C%D8%B2%DB%8C_%D8%B1%D8%A7_%D8%A2%D8%BA%D8%A7%D8%B2_%DA%A9%D9%86%DB%8C%D8%AF" class="ez-toc-section"></span><strong>۳-</strong>&nbsp;<strong>رنگ&zwnj;آمیزی را آغاز کنید</strong></h3>
<ul>
<li>اگر رنگ سفال شما ساده یا تک رنگ است، می&zwnj;توانید سطح مورد نظر را در یک یا دو لایه رنگ&zwnj;آمیزی کنید.</li>
<li>اگر رنگ سفال شما طرح&zwnj;دار یا چند رنگ است، می&zwnj;توانید سطح مورد نظر را در چند لایه رنگ&zwnj;آمیزی کنید.</li>
<li>اگر از رنگ با حلال آب برای رنگ&zwnj;آمیزی سفال استفاده کنید، امکان شست&zwnj;وشو سفال را پس از اتمام رنگ&zwnj;آمیزی ندارید.</li>
</ul>
<h3 class="wp-block-heading"><span id="%DB%B4-_%D8%A8%D8%B1%D8%A7%DB%8C_%D9%85%D8%AD%D8%A7%D9%81%D8%B8%D8%AA_%D8%A7%D8%B2_%D8%B1%D9%86%DA%AF%D8%8C_%D8%AA%D8%AB%D8%A8%DB%8C%D8%AA%E2%80%8C%DA%A9%D9%86%D9%86%D8%AF%D9%87_%D8%A8%D8%B2%D9%86%DB%8C%D8%AF" class="ez-toc-section"></span><strong>۴- برای محافظت از رنگ، تثبیت&zwnj;کننده بزنید</strong></h3>
<ul>
<li>هدف از تثبیت رنگ کار شده بر روی سفال، افزایش مقاومت رنگ سفال در برابر آب، رطوبت، گرما، سرما، حرارت و &hellip; به ویژه برای رنگ&zwnj;های با حلال آب همچون اکریلیک و گواش است.</li>
<li>برای تثبیت رنگ کار شده بر روی سفال پس از خشک شدن، از اسپری تثبیت&zwnj;کننده رنگ (اسپری فیکساتور، اسپری جلا، اسپری براق&zwnj;کننده و اسپری کلر)، روغن جلا، روغن کریستال، وارنیش و در صورت نیاز از اسپری تافت مو سر استفاده کنید.</li>
<li>در صورت استفاده از رنگ روغنی برای سفال، نیازی به تثبیت&zwnj;کننده ندارید.</li>
</ul>
<h2 class="wp-block-heading"><span id="%D8%B7%D8%B1%D8%B2_%D8%A7%D8%B3%D8%AA%D9%81%D8%A7%D8%AF%D9%87_%D8%A7%D8%B2_%D9%88%D8%A7%D8%B1%D9%86%DB%8C%D8%B4_%D8%B1%D9%88%D8%BA%D9%86%DB%8C_%D8%B1%D9%88%DB%8C_%D8%B3%D9%81%D8%A7%D9%84" class="ez-toc-section"></span><strong>طرز استفاده از وارنیش روغنی روی سفال</strong></h2>
<p>۱- ابتدا رنگ مورد نیاز خود را بر روی سفال اجرا کنید.</p>
<p>۲- پس از آن، نوبت به اجرای وارنیش روغنی روی سفال می&zwnj;رسد. توجه کنید که برای اجرای وارنیش روغنی رو سفال، حتما باید سطح سفال به طور کامل خشک شده باشد.</p>
<p>۳- وارنیش روغنی را با مقداری حلال (تینر) ترکیب کنید و هم بزنید. ترکیب به دست آمده را به وسیله قلم مو نرم سر پهن بر روی سفال اجرا کنید. هدف استفاده از قلم مو نرم سر پهن، یکدست شدن اجرای وارنیش بر روی سطح سفال است.</p>
<p>۴- پس از اجرای لایه اول، اجازه دهید تا خشک شود. خشک شدن لایه اول بین ۳ تا ۴ ساعت زمان می&zwnj;برد.</p>
<p>۵- لایه دوم را بر روی سفال بزنید و اجازه دهید خشک شود تا مرحله وارنیش روغنی به پایان برسد.</p>
<p>برای خرید وارنیش روغنی روی سفال، به وب سایت&nbsp;<a href="https://miniatureiran.com/">فروشگاه اینترنتی رنگ، چسب و ابزار مینیاتور</a>&nbsp;مراجعه کنید.</p>
<p>قیمت رنگ اکریلیک برای سفال</p>
<p>قیمت رنگ اکریلیک بستگی به میزان و نوع آماده و کامپیوتری (ترکیبی) آن دارد. برای اطلاع از قیمت رنگ اکریلیک آماده یا کامپیوتری، صفحه&nbsp;<a href="https://miniatureiran.com/products/rang/akrilik">رنگ اکریلیک</a>&nbsp;در وب سایت&nbsp;<a href="https://miniatureiran.com/">فروشگاه اینترنتی رنگ، چسب و ابزار مینیاتور</a>&nbsp;را دنبال کنید.</p>
<h2 class="wp-block-heading"><span id="%D8%AC%D9%85%D8%B9%E2%80%8C%D8%A8%D9%86%D8%AF%DB%8C" class="ez-toc-section"></span><strong>جمع&zwnj;بندی</strong></h2>
<div class="wp-block-image">
<figure class="aligncenter size-large"><img class="wp-image-1843" src="https://miniatureiran.com/blog/wp-content/uploads/2022/10/blue-square-tiled-texture-background_53876-63563-1024x682.jpg" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://miniatureiran.com/blog/wp-content/uploads/2022/10/blue-square-tiled-texture-background_53876-63563-1024x682.jpg 1024w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/blue-square-tiled-texture-background_53876-63563-300x200.jpg 300w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/blue-square-tiled-texture-background_53876-63563-768x512.jpg 768w, https://miniatureiran.com/blog/wp-content/uploads/2022/10/blue-square-tiled-texture-background_53876-63563.jpg 1060w" alt="کاشی سفالی آبی" width="1024" height="682" loading="lazy"></figure>
</div>
<p><br>در این مقاله تلاش شد تا آموزش رنگ&zwnj;آمیزی سفال به طور کامل بررسی شود؛ به طوری که در حال حاضر می&zwnj;توان اشاره کرد که برای رنگ کردن سفال، ۶ نوع رنگ استفاده می&zwnj;شود که شامل رنگ اکریلیک، رنگ روغنی، رنگ سرامیک، رنگ گواش، اسپری رنگ و لاک ناخن است. برای تثبیت رنگ اجرا شده بر روی سفال، از اسپری جلا، اسپری فیکساتیو، اسپری کلر،اسپری تافت مو سر، روغن جلا، روغن کریستال و روغن وارنیش استفاده می&zwnj;شود. در صورت به کار بردن رنگ روغنی بر روی سفال، نیازی به استفاده از تثبیت&zwnj;کننده رنگ نیست. تثبیت&zwnj;کننده رنگ سفال، تنها برای رنگ&zwnj;های برپایه آب ضروری است.</p>',
                    'image' => 'posts\\June2023\\FGbWFjxJrwbkrnXIX6wc.jpg',
                    'slug' => 'برگذاری-وبینار-رنگ-شناسی-در-هنرستان-البرز',
                    'meta_description' => 'برگذاری وبینار رنگ شناسی در هنرستان البرز برگزار شد',
                    'meta_keywords' => 'وبینار، رنگ شناسی، هنرستان البرز',
                    'status' => 'PENDING',
                    'featured' => 0,
                    'created_at' => '2023-06-22 10:05:42',
                    'updated_at' => '2023-06-22 10:07:15',
                ),
            ));
        
        
    }
}