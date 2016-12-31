@extends('layouts.fe')

@section('content')
<div id="body" class="scrollable">
    <section  id="hero" class="section">
        <div class="inner" style="">
            <img src="/assets/images/biglogo.png"></image>
            <p id="exp">倾情全力 聚智成湖 泽杉成林</p>
        </div>
        <div class="arrow" style="font-size: 18px;position:absolute; width: 100%; top:86%;"> <a href="#whoami">揭开奥银湖杉的面纱</a> </div>
        <div class="bg-box">
            <div class="bg" src="/assets/images/hero_normal.jpg"> </div>
        </div>
     </section>
    <section id="whoami" class="section">
        <div class="content">
            <div class="inner" id="inner">
                <p>奥银湖杉由苏仁宏（全球著名电子及半导体产业链投资机构华登国际原合伙人）、盛雷（著名风险投资公司纪源资本原投资副总裁）、奥飞娱乐（002292）于2016年联合创立。</p>
                <p>奥飞娱乐（002292）是中国领先的泛娱乐集团，成立于1993年，2009年成为国内第一家动漫上市公司。现已实现IP产业全平台运营（动漫原创平台、动漫IP、IP衍生品、影视、游戏、VR／智能玩具等泛娱乐生态），致力新时代的东方迪斯尼。</p>
                <p>奥银湖杉关注技术驱动下的智能产业升级所带来的投资机会，专注于半导体及电子产业链、人工智能、科技文化娱乐、科技金融等领域，挖掘早中期、整合中后期。</p>
            </div>
        </div>
    </section>

    <section id="partners" class="section">
        <div class="content">
        <div class="inner">
            <div class="cols wrapper" id="small">
            <h2>投资团队</h2>
            <div class="hr"></div>
                <div class="team flexslider" id="investTeam">
                    <ul class="slides">
                        <li>
                            <!--<div class="flip-container" ontouchstart="this.classList.toggle('hover')">-->
                            <!--<div class="flipper">-->
                                <!--<div class="front">-->
                                    <figure>
                                        <img src="/assets/images/surenhong.jpg"> </img>
                                        <figcaption>
                                        <span class="name">苏仁宏</span>
                                        <span class="title">创始合伙人 CEO</span>
                                        </figcaption>
                                    </figure>
                                    <p>
奥银湖杉创始合伙人 CEO、全球著名半导体及电子产业链投资机构华登国际原合伙人，拥有11年电子及半导体产业技术及市场管理经验（华为、美国Semtech），7年投资经验，主导参与项目包括矽力杰（台湾上市）、大疆（无人机）、DFRobot、曼恒等，具有极丰富的产业链投资经验和深度广泛的产业资源。苏先生拥有通讯专业工学硕士学位、中欧EMBA。
                                    </p>
                                <!--</div>-->
                                <!--<div class="back">-->
<!--<p> 大帅逼大帅逼， 我是一个大帅比，咿呀咿呀呦</p>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/shenglei.jpg"> </img>
                                <figcaption>
                                <span class="name">盛 雷</span>
                                <span class="title">创始合伙人</span>
                                </figcaption>
                            </figure>
                                <p>
奥银湖杉创始合伙人，全球著名风险投资机构纪源资本（GGV Capital）原投资副总裁，长期关注技术驱动下的产业链投资机会，主要投资项目包括天智航、云洲智能、上海元趣、深之蓝、亮风台、小熊尼奥、中持水务、环美生态等，具有丰富的科技项目投资经验。盛雷先生还曾供职于第三方投资研究机构Pacific Epoch和荷兰银行（ABN AMRO）。盛雷先生拥有材料专业工学硕士学位。
            </p>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/lijun.jpg"> </img>
                                <figcaption>
                                <span class="name">李 斌</span>
                                <span class="title">创始合伙人</span>
                                </figcaption>
                            </figure>
<p>
奥银湖杉创始合伙人，奥飞娱乐副总裁、首席战略官。他对动漫文化产业链有极深刻的理解，他在奥飞娱乐投资的项目包括诺亦腾、乐相、广州数娱、快乐工场、牛卡娱乐等项目，领域覆盖文学动漫内容、IP平台、VR产业链、智能玩具、动漫游戏等泛娱乐生态。李斌先生拥有上海对外经贸大学硕士学位。
</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cols wrapper" id="large">
            <h2>投资团队</h2>
            <div class="hr"></div>
                <div class="team flexslider" id="investTeam-large">
                    <ul class="slides">
                        <li>

                            <!--<div class="flip-container" ontouchstart="this.classList.toggle('hover')">-->
                            <!--<div class="flipper">-->
                                <!--<div class="front">-->
                                    <figure>
                                        <img src="/assets/images/surenhong.jpg"> </img>
                                        <figcaption>
                                        <span class="name">苏仁宏</span>
                                        <span class="title">创始合伙人CEO</span>
                                        </figcaption>
                                    </figure>
                                <!--</div>-->
                                <!--<div class="back">-->
<p>
奥银湖杉创始合伙人 CEO、全球著名半导体及电子产业链投资机构华登国际原合伙人，拥有11年电子及半导体产业技术及市场管理经验（华为、美国Semtech），7年投资经验，主导参与项目包括矽力杰（台湾上市）、大疆（无人机）、DFRobot、曼恒等，具有极丰富的产业链投资经验和深度广泛的产业资源。苏先生拥有通讯专业工学硕士学位、中欧EMBA。
</p>
                                <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->

                            <!--<figure>-->
                                <!--<img src="/assets/images/team1-tall.jpg"> </img>-->
                                <!--<figcaption>-->
                                <!--<span class="name">苏仁宏</span>-->
                                <!--<span class="title">合伙人</span>-->
                                <!--</figcaption>-->
                            <!--</figure>-->
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/shenglei.jpg"> </img>
                                <figcaption>
                                <span class="name">盛 雷</span>
                                <span class="title">创始合伙人</span>
                                </figcaption>
                            </figure>
                            <p>
奥银湖杉创始合伙人，全球著名风险投资机构纪源资本（GGV Capital）原投资副总裁，长期关注技术驱动下的产业链投资机会，主要投资项目包括天智航、云洲智能、上海元趣、深之蓝、亮风台、小熊尼奥、中持水务、环美生态等，具有丰富的科技项目投资经验。盛雷先生还曾供职于第三方投资研究机构Pacific Epoch和荷兰银行（ABN AMRO）。盛雷先生拥有材料专业工学硕士学位。

                            </p>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/lijun.jpg"> </img>
                                <figcaption>
                                <span class="name">李 斌</span>
                                <span class="title">创始合伙人</span>
                                </figcaption>
                            </figure>
    <p>
    奥银湖杉创始合伙人，奥飞娱乐副总裁、首席战略官。他对动漫文化产业链有极深刻的理解，他在奥飞娱乐投资的项目包括诺亦腾、乐相、广州数娱、快乐工场、牛卡娱乐等项目，领域覆盖文学动漫内容、IP平台、VR产业链、智能玩具、动漫游戏等泛娱乐生态。李斌先生拥有上海对外经贸大学硕士学位。
    </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!--<div class="cols wrapper">
            <h2>顾问团队</h2>
            <div class="hr"></div>
                <div class="team flexslider" id="consultTeam">
                    <ul class="slides">
                        <li>
                            <figure>
                                <img src="/assets/images/team.jpg"> </img>
                                <figcaption>
                                <span class="name">peter chan</span>
                                <span class="title">合伙人</span>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/team.jpg"> </img>
                                <figcaption>
                                <span class="name">peter chan</span>
                                <span class="title">合伙人</span>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/team.jpg"> </img>
                                <figcaption>
                                <span class="name">peter chan</span>
                                <span class="title">合伙人</span>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>--!>
        </div>
    </div>
    </section>

    <section id="cases" class="section">
        <div class="content">
            <div class="inner">
            <div class="btn-center-container">
                <div class="btn-group" id="case-swap">
                    <button class="aitech left active">智能科技</button>
                    <button class="aientain right">智能娱乐</button>
                </div>
            </div>
        <div id="aitechSlider" class="flexslider">
            <ul class="slides">
                <li data-thumb="/assets/images/yuanqu_.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/yuanqu.jpg" alt="">
                        <div class="message_wrapper">
                            <!--<div class="name">Angela </div>-->
                            <div class="company">HOW ARE YOU</div>
                            <p>
上海元趣信息技术有限公司由微软亚洲研究院的技术专家、科大讯飞元老级核心成员、也曾是中科大少年班的天才们创立，历时3年不仅将儿童领域的语音交互技术做到行业第一，更是全心为儿童打造了一款专属于他们的教育陪护机器人，让孩子们伴随黑科技带来的乐趣中成长。
                            </p>
                        </div>
                    </div>
                </li>
                <li data-thumb="/assets/images/gdi_.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/gdi.jpg" alt="">
                        <div class="message_wrapper">
                            <!--<div class="name">Angela </div>-->
                            <div class="company">曼恒数字</div>
                            <p>
上海曼恒数字是中国VR行业的杰出代表，新三板VR业务第一股，公司十年专注VR技术研发和积累，形成了行业应用和娱乐应用两个业务方向，是目前国内收入规模，市值，人数最大的VR企业。公司先后获得湖杉、软银赛富等几十家机构的投资，创始人同时担任中国文化娱乐行业协会虚拟现实专业委员会主任职务，公司及创始人在行业内有广泛的影响力。
                            </p>
                        </div>
                    </div>
                </li>
                <li data-thumb="/assets/images/anghua_.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/anghua.jpg" alt="">
                        <div class="message_wrapper">
                            <!--<div class="name">Angela </div>-->
                            <div class="company">昂华自动化</div>
                            <p>

昂华（上海）自动化工程股份有限公司是国内少有的可以提供工业4.0智能工厂完整解决方案的企业，公司集非标设备设计、加工、制造能力于一体，产品主要包括：机器人柔性系统、自动化装配设备、检测及测试设备、MES 系统、整线解决方案及智能工厂规划。产品广泛应用于汽车动力总成，汽车零部件，新能源汽车动力系统，飞机制造等领域，可以满足客户的各种差异化需求。昂华秉承“诚信、责任、专业、坚持”的价值观，致力于成为高端装配制造行业的领军企业。
                            </p>
                        </div>
                    </div>
                </li>

                <li data-thumb="/assets/images/df_.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/df.jpg" alt="">
                        <div class="message_wrapper">
                            <!--<div class="name">Angela </div>-->
                            <div class="company">智位机器人</div>
                            <p>

上海智位机器人股份有限公司 （DFRobot）是成立于2008年的全球领先的创客平台公司。公司组建了全国最大的创客社区平台。通过平台为全球120多个国家的创客，企业和学校提供了超过上千种创造所需的模组，产品和服务。为创造助力是公司的使命。
                            </p>
                        </div>
                    </div>
                </li>
                <li data-thumb="/assets/images/more_small.jpg">
                    <div class="wrapper">
                            <a href="" class="more_company show_pp">
                                <img src="/assets/images/minxin_.jpg" alt="" draggable="false">
                                    <div class="message_wrapper hidden">
                                        <img class="avatar" src="/assets/images/df.jpg" alt="">
                                        <div class="company">敏芯微</div>
                                        <p>
苏州敏芯微电子技术有限公司成立于2007年，是国内最早的MEMS研发公司之一。已申请和在申请专利累计已达70多项，拥有数项涉及MEMS关键技术的突破性发明和世界级科研成果。 敏芯微不仅填补了国内 MEMS 产业的空白，还将顺应世界半导体产业向中国转移的趋势，发展成为具有世界影响力的MEMS公司

                                        </p>
                                    </div>
                            </a>
                            <a href="" class="more_company show_pp">
                                <img src="/assets/images/eViewTek_.jpg" alt="">
                                    <div class="message_wrapper hidden">
                                        <img class="avatar" src="/assets/images/eViewTek.jpg" alt="">
                                        <div class="company">点睛创视</div>
                                        <p>
深圳市点睛创视技术有限公司(eViewTek Technology Co. Ltd)专业从事光电显示技术、微型投影技术及光学器件的开发与生产。经过五年的积累与沉淀，已经成为微型投影光学引擎的核心供应商之一，并将继续与业内知名公司通力合作，共同推进微型投影在消费电子、移动商务、工业应用、穿戴显示和车载显示等领域的发展。
</p>
                                    </div>


                            </a>
                            <a href="" class="more_company show_pp">
                                <img src="/assets/images/aisen_.jpg" alt="">

                                    <div class="message_wrapper hidden">
                                        <img class="avatar" src="/assets/images/aisen.jpg" alt="">
                                        <div class="company">
艾森智能
</div>
                                        <p>
深圳市艾森智能技术有限公司（AISenz Inc.) 团队曾履职于贝尔实验室（Bell Labs)、大疆创新等，拥有丰富的大数据存储及处理经验，专注于为行业物联网提供无线连接性、数据驱动的智能应用和解决方案（SaaS），服务于智能制造、智慧能源、智慧城市及智慧农业等领域。
                                        </p>
                                    </div>

                            </a>
                    </div>
                </li>
            </ul>
            </div>
            <div id="aientainSlider" class="flexslider">
            <ul class="slides">
                <li data-thumb="/assets/images/maowang_.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/maowang.jpg" alt="">
                        <div class="message_wrapper">
                            <!--<div class="name">Angela </div>-->
                            <div class="company">云动创想</div>
                            <p>
深圳市云动创想科技有限公司由著名“匠人”曾德钧创立，他是五次国际创新大奖获得者，专从音响行业几十年，在智能音响、收音机、有源音箱、数字功放等多项国家标准、行业标准里任组长、副组长或成员，业内技术专家。猫王收音机设计师。公司希望成为未来新“声活”方式的引领者。
                            </p>
                        </div>
                    </div>
                </li>
                <li data-thumb="/assets/images/xingzhe_.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/xingzhe.jpg" alt="">
                        <div class="message_wrapper">
                            <!--<div class="name">Angela </div>-->
                            <div class="company">行者</div>
                            <p>
“行者”是国内最大的骑行户外运动APP，垂直覆盖户外运动发烧友人群。目前行者占有骑行垂直领域超过半数的市场份额并拥有一大批忠实的粉丝用户，在核心技术、品牌文化等建立了较高壁垒。
                            </p>
                        </div>
                    </div>
                </li>
                <li data-thumb="/assets/images/leifeng_.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/leifeng.jpg" alt="">
                        <div class="message_wrapper">
                            <!--<div class="name">Angela </div>-->
                            <div class="company">雷锋网</div>
                            <p>
连接智能与未来，兴于中国智能硬件第一媒体，致力成为全球领先的科技媒体。
雷锋网隶属于深圳英鹏信息技术有限公司，专注于移动互联网与智能硬件的未来，在新媒体业务上为读者提供移动互联网、硬件创业以及软硬件结合开发的第一手资讯与行业深度解读。

                            </p>
                        </div>
                    </div>
                </li>

                <li data-thumb="/assets/images/daqianyangguang_.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/daqianyangguang.jpg" alt="">
                        <div class="message_wrapper">
                            <!--<div class="name">Angela </div>-->
                            <div class="company">大千阳光</div>
                            <p>
中国领先的动漫影视IP开发与制作公司（代表作品：大圣归来）
北京大千阳光数字科技股份有限公司，成立于2013年底，位于北京市中关村上地产业基地。核心团队产业经验15年以上，由资深制片人、导演、艺术家、研发、金融等各尖端人才组成。团队拥有极其丰富的项目操作经验，曾深度参与国内外诸多知名影视动画及游戏项目。
                            </p>
                        </div>
                    </div>
                </li>
                <li data-thumb="/assets/images/lexingren_.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/lexingren.jpg" alt="">
                        <div class="message_wrapper">
                            <!--<div class="name">Angela </div>-->
                            <div class="company">乐星人</div>
                            <p>
深圳行之赋格文化科技有限公司，拒绝单调！“乐星人”专注考、学、练的线上线下音乐教育和社群。来自耶鲁大学、朱莉亚音乐学院，以及腾讯、微软的团队，带你站在艺术与科技的交汇处，让音乐学习更简单更快乐！
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </section>
    <section id="news" class="section" style="background-color:rgb(30, 172, 252)">
    <div class="content">
            <div class="pics flexslider" id="newsSlider">
                <ul class="pic_list slides">
                    <li class="pic_item"><div class="img_container"><img src="/assets/images/news1.jpg">  </img></div></li>
                    <li class="pic_item"><div class="img_container"><img src="/assets/images/news2.jpg">  </img></div></li>
                    <li class="pic_item"><div class="img_container"><img src="/assets/images/news3.jpg">  </img></div></li>
                </ul>
            </div>
            <div class="list">
                <h2>最新动态</h2>
                <ul class="news_list">
                    <li>
                    <div class="time" ><a href="http://mp.weixin.qq.com/s?__biz=MjM5MjU4MjQ0MA==&mid=401483191&idx=1&sn=2e74ca9761447a5fd07a82fdb404f415&mpshare=1&scene=1&srcid=1127p15wI0sxUTJPY12m6psI#rd">2015-11-27</a> </div><div class="title"> <a href="http://mp.weixin.qq.com/s?__biz=MjM5MjU4MjQ0MA==&mid=401483191&idx=1&sn=2e74ca9761447a5fd07a82fdb404f415&mpshare=1&scene=1&srcid=1127p15wI0sxUTJPY12m6psI#rd">这条微信通往未来：智能硬件的机会与投资</a></div>
                    </li>

                    <li>
                    <div class="time" ><a href="http://mp.weixin.qq.com/s?__biz=MjM5NjY1NTc0MQ==&mid=2653820541&idx=1&sn=58af2f0b511bbb4d8f142bd06b8c7ea1&chksm=bd3f516f8a48d879e982538722966bf17323b126a00ada34285aff4555134a3e1915f4687f96&mpshare=1&scene=1&srcid=11152hS1kkdPtb50nQxVnlxa#rd">2016-11-15</a> </div><div class="title"> <a href="http://mp.weixin.qq.com/s?__biz=MjM5NjY1NTc0MQ==&mid=2653820541&idx=1&sn=58af2f0b511bbb4d8f142bd06b8c7ea1&chksm=bd3f516f8a48d879e982538722966bf17323b126a00ada34285aff4555134a3e1915f4687f96&mpshare=1&scene=1&srcid=11152hS1kkdPtb50nQxVnlxa#rd">未来已经到来，人工智能下一个独角兽在哪里？丨全球创业周天翼创投专场</a></div>
                    </li>
                    @foreach($news as $new)
                    <li>
                    <div class="time" ><a class="pop" href="/index/detail/{{$new->id}}"> {{ get_date($new->created_at) }} </a> </div><div class="title"> <a class="pop" href="/index/detail/{{$new->id}}">{{$new->title}}</a></div>
                    </li>
                    @endforeach
                </ul>
                <button>  more </button>
            </div>
    </div>
    </section>

    <section id="contact" class="section">
        <div class="content">
        <div class="inner">
            <div style="min-width: 20em"><h2>联系我们</h2></div>
            <div class="contact">
                <figure  class="wechat">
                    <img src="/assets/images/weixin.jpeg" alt="">
                    <figcaption>
                        <p>关注微信公众号</p>
                        <p>allincap</p>
                    </figcaption>
                </figure>
                <figure class="email">
                    <img src="/assets/images/bp.png" alt="">
                    <figcaption>
                        <p>商业计划</p>
                        <a href="mailto:bp@allincap.com">bp@allincap.com</a>
                    </figcaption>
                </figure>
            </div>
            <div>
                <ul class="address">
                    <li>
                        <h3>上海</h3>
                        <p>上海市浦东新区新金桥路27号8号楼2层E室

<br>
 邮编：201206    电话：021-58580886
<br>
                  </p>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>
</div>

<section style="" id="footer">
    <p>©Copyright 2017 Allin Capital</p>
</section>
<div id="popup_pp" class="loading">
    <div class="modal_box">
        <div class="modal-nav">
            <a href="" id="close_pp">×</a>
             <a id="go_to_blog" href="http://www.bluelakecap.com/?page_id=195">
                            阅读更多新闻 
            </a>
        </div>

        <div class="modal-body">

        </div>

    </div>
</div>

@endsection
