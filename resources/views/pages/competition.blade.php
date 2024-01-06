@extends("layouts.main")
@section("content")
    <div id="page-section">
        <section id="blog">
            <div class="container-fluid">
                <div class="jumbo-heading">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="nav nav-pills  mobver arabic ">
                                <li class="dropdown">
                                    <a class="dropdown-toggle english" data-toggle="dropdown" href="#">إختيار اللغة <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route("competition.en")}}">إنجليزي</a></li>
                                        <li><a href="{{route("competition")}}">عربي</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h1>نجم العلوم</h1>
                        </div>
                        <div class="col-md-4">
                            <ul class="nav nav-pills  mobver arabic ">
                                <li>
                                    <a href="https://forms.gle/76RZr58Ur6SJ7ztb9" target="_blank" id="send" class=" english">
                                        سجل الآن
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div id="blog-container" class="col-md-12">
                        <div class="blog-post post-main">
                            <img class="img-responsive center-block" loading="lazy" src="{{asset("images/scienceStar.webp")}}" alt="">
                            <div class="col-md-12 res-margin">

                                <div class="col-md-12">
                                    <h4 class="sub-header"></h4>
                                    <ul class="nav nav-tabs arabic">
                                        <li class="active"><a href="#A" data-toggle="tab">وصف عام</a></li>
                                        <li><a href="#B" data-toggle="tab">شروط المسابقة</a></li>
                                        <li><a href="#C" data-toggle="tab"> خطوات التقديم</a></li>

                                    </ul>
                                    <div class="tabbable">
                                        <div class="tab-content">
                                            <div class="tab-pane active in fade" id="A">
                                                <ul class="custom no-margin arabic">
                                                    <li>
                                                        هي مسابقة في مجال تبسيط العلوم يقوم فيها المتسابقين بمحاولة تبسيط محتوى
                                                        علمي من اختيارهم ، سواء محتوى علمي معروف أو مشروع تخرج للمتسابق أو رسالة
                                                        ماجستير أو دكتوراه يعمل المتسابق عليها، ألا تقل مدة الفيديو عن ٣ دقائق ولا
                                                        تزيد عن خمس دقائق.
                                                    </li>
                                                    <li>
                                                        تبدأ المسابقة بتقييم مقاطع الفيديو التي تم إرسالها من قِبَل
                                                        المتسابقون،والتي سيتم تقييمها وفقاً لقواعد قياس جودة المحتوى كالبحث
                                                        ،المفردات ،العرض التقديمي ،التعبير الصوتي ،السرعة ،الطلاقة ،التواصل البصري
                                                        ،ولغة الجسد.</li>
                                                    <li>
                                                        المتأهلون من المرحلة الأولى يتم منحهم فترة تدريبية مقدمة من شارع العلوم على
                                                        احتراف طرق التواصل العلمي بداية طرق التبسيط ووصولاّ إلى طرق التقديم
                                                        الاحترافية ،ومن ثَم يتم ترشيحهم للمرحلة الثانية ،حيث تتم التصفية بينهم عن
                                                        طريق انتاجهم لمحتوى آخر بعد التدريب يتم على منصات التواصل الاجتماعي الخاصة
                                                        (بشارع العلوم) للتصويت بينهم من خلال الجمهور واختيار الفائزين منهم للانتقال
                                                        إلى المرحلة الثالثة .
                                                    </li>
                                                    <li>
                                                        في المرحلة الثالثة يقوم المتسابقون بعرض محتواهم العلمي على المسرح مباشرة
                                                        للحضور في يوم مليئ بالمفاجآت المقدمه من شارع العلوم حيث يتم اختيار الفائز
                                                        بلقب ( نجم العلوم)
                                                    </li>
                                                    <li>
                                                        الفائز بلقب ( نجم العلوم ) يحصل على ميدالية خاصة بالإضافة إلى مكافأة مالية
                                                        تقدر بألف دولار أمريكي.</li>
                                                    <li>
                                                        يتم اختيار لجنة التحكيم وفقاً لخبراتهم في مجال التواصل العلمي
                                                        العلمي،بالإضافة إلى مشاركتهم السابقة في المسابقات العلمية .</li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="B">
                                                <p>
                                                <ul class="custom no-margin arabic">
                                                    <li>
                                                        ألا يقل سن المتسابق عن ١٨ عاما بحلول أول مارس ٢٠٢٣.
                                                    </li>
                                                    <li>
                                                        المحتوى المقدم يجب أن يكون باللغة العربية
                                                    </li>
                                                    <li>
                                                        ألا تقل مدة الفيديو عن ٣ دقائق ولا تزيد عن خمس دقائق ( يرجى مراعاة جودة
                                                        الصورة والصوت ) .
                                                    </li>
                                                    <li>
                                                        آخر موعد للتقديم يوم 28-2-2023 .
                                                    </li>
                                                    <li>
                                                        الموضوعات المقدمة يجب أن تكون تبسيطا لفكرة في المجالات العلمية وليست
                                                        الأدبية كمجالات ( الفيزياء والكيمياء والطب والهندسة وعلوم الحاسب وغيرها )
                                                    </li>
                                                    <li>
                                                        يمكن أن تكون الموضوعات المقدمة تبسيطا لأفكار علمية معروفة بالفعل أو لأبحاث
                                                        علمية قيد البحث من المتسابق نفسه كرسائل الماجستير والدكتوراة .
                                                    </li>
                                                    <li>
                                                        غير مسموح باستخدام وسائل العرض (الأنميشن). يمكن تقديم صور مرجعية أو
                                                        فيديوهات أخرى في منتصف الفيديو، مع الإشارة الصحيحة للمصادر والمراجع في
                                                        نهاية الفيديو.
                                                    </li>
                                                </ul>
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="C">
                                                <ul class="custom no-margin arabic">
                                                    <li>
                                                        يقوم المتسابق باختيار الموضوع ورفعه على قناة اليوتيوب الخاصة به ( هام :
                                                        كتابة اسم المتسابق في عنوان الفيديو-اسم المسابقة -شارع العلوم)
                                                        مثال..عبدالرحمن رضوان-نجم العلوم,-شارع العلوم
                                                    </li>
                                                    <br>
                                                    <li>
                                                        يقوم المتسابق بنسخ الرابط الخاص بالفيديو ووضعه في استمارة التقديم بالاسفل
                                                        (يمكن أن تكون القناة بها محتوى سابق أو حديثة الإنشاء)
                                                    </li>
                                                    <br>
                                                    <li>
                                                        يقوم المتسابق بمتابعة جميع المنصات الخاصة بشارع العلوم من حين لآخر لمعرفة
                                                        نتيجة المسابقة .
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 margin1 arabic">
                                <div class="col-md-12 ">
                                    <h4 class="sidebar-header col-md-3 titleAr"> نقاط التحكيم</h4>
                                </div>
                                <div class="well col-md-4 margin1 ">
                                    <h5>المضمون</h5>
                                    <p>يتضمن المحتوى معلومات دقيقة ومتعمقة عن كل ما هو مهم
                                        في الموضوع المقدم بالاضافة للتفاصيل والأمثلة المناسبة.</p>
                                </div>
                                <!--/well -->
                                <div class="paper col-md-4">
                                    <h5>البحث</h5>
                                    <p>أن يشعر المتلقي بوجود بحث عميق ،وجمع معلومات منظمة
                                        وعرضها على لسان الكاتب الأصلي.</p>
                                </div>
                                <div class="bubble col-md-4">
                                    <h5>المفردات</h5>
                                    <p>
                                        أن يكون لدى المتسابق حصيلة مفردات واسعة وقوية لتبسيط مفردات المجال الصعبة
                                        بطريقة مناسبة.
                                    </p>
                                </div>
                                <div class="paper col-md-4">
                                    <h5>السرعة والطلاقة</h5>
                                    <p>كلما كان المتحدث طليقا وقادرا على جذب الانتباه بالاسلوب والحركة , كلما كان من السهل على
                                        الجمهورأن يفهم مايقول.</p>
                                </div>
                                <div class="bubble col-md-4">
                                    <h5>العرض العام </h5>
                                    <p>أن تصب كل النقاط السابقة في تقديم عرض فاق التوقعات , وهو ببساطة سرعة فهم وتفاعل الجمهور
                                        مع العرض.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 margin1 ">
                                <div class="col-md-12 arabic">
                                    <h4> الجدول الزمني للمسابقة </h4>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="row">
                                        <table class="col-md-5 blockquote bg-color3 arabic floatright">
                                            <tr>
                                                <td> فتح باب التسجيل </td>
                                                <td> <i class="fa fa-calendar-days"></i> ٢٠٢٣/٢/١٧ </td>
                                            </tr>
                                        </table>
                                        <table class="col-md-5 blockquote bg-color3 arabic floatright">
                                            <tr>
                                                <td> غلق باب التسجيل </td>
                                                <td> <i class="fa fa-calendar-days"></i> ٢٠٢٣/٢/٢٨ </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <table class="col-md-5 blockquote bg-color1 arabic floatright">
                                            <tr>
                                                <td> إعلان الفائزين بالمرحلة الأولى</td>
                                                <td> <i class="fa fa-calendar-days"></i> ٢٠٢٣/٣/٥ </td>
                                            </tr>
                                        </table>
                                        <table class="col-md-5  blockquote bg-color1 arabic floatright">
                                            <tr>
                                                <td>بدأ التصويت للمرحلة الثانية </td>
                                                <td> <i class="fa fa-calendar-days"></i> ٢٠٢٣/٣/٦ </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <table class="col-md-5  blockquote bg-color2 arabic floatright">
                                            <tr>
                                                <td>إاعلان الفائزين في المرحلة الثانية</td>
                                                <td> ترقبوا</td>
                                            </tr>
                                        </table>
                                        <table class="col-md-5 blockquote bg-color2 arabic floatright">
                                            <tr>
                                                <td>بدأ التدريب</td>
                                                <td> ترقبوا</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <table class=" col-md-5  blockquote bg-color3 arabic floatright">
                                            <tr>
                                                <td>المرحلة النهائية </td>
                                                <td> سيتم الاعلان قريباً</td>

                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center margin1">
                                <a href="https://forms.gle/76RZr58Ur6SJ7ztb9" target="_blank" id="send" class="btn">
                                    سجل الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
