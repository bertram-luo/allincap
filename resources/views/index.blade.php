@extends('layouts.fe')

@section('content')
<div id="body" class="scrollable">
    <section  id="hero" class="section">

        <div class="inner" style="">
            <img src="/assets/images/biglogo.png"></image>
        </div>
        <div id="arrow" style="font-size: 18px;position:absolute; width: 100%; top:86%;"> <a href="#whoami">揭开奥银的面纱</a> </div>
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
                            <figure>
                                <img src="/assets/images/team1-tall.jpg"> </img>
                                <figcaption>
                                <span class="name">苏仁宏</span>
                                <span class="title">合伙人</span>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/team2-tall.jpg"> </img>
                                <figcaption>
                                <span class="name">盛 雷</span>
                                <span class="title">合伙人</span>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/team3-tall.jpg"> </img>
                                <figcaption>
                                <span class="name">李 斌</span>
                                <span class="title">合伙人</span>
                                </figcaption>
                            </figure>
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
                            <figure>
                                <img src="/assets/images/team1-tall.jpg"> </img>
                                <figcaption>
                                <span class="name">苏仁宏</span>
                                <span class="title">合伙人</span>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/team2-tall.jpg"> </img>
                                <figcaption>
                                <span class="name">盛 雷</span>
                                <span class="title">合伙人</span>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/team3-tall.jpg"> </img>
                                <figcaption>
                                <span class="name">李 斌</span>
                                <span class="title">合伙人</span>
                                </figcaption>
                            </figure>
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
                    <button class="left active">智能科技</button>
                    <button class="right">智能娱乐</button>
                </div>
            </div>
            <div id="slider" class="flexslider">
            <ul class="slides">
                <li data-thumb="/assets/images/yuanqu.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/case1.jpg" alt="">
                        <div class="message_wrapper">
                            <!--<div class="name">Angela </div>-->
                            <!--<div class="company">xx科技</div>-->
                            <p>
上海元趣由微软亚洲研究院的技术专家、科大讯飞元老级核心成员、也曾是中科大少年班的天才们创立，历时3年不仅将儿童领域的语音交互技术做到行业第一，更是全心为儿童打造了一款专属于他们的教育陪护机器人，让孩子们伴随黑科技带来的乐趣中成长。
                            </p>
                        </div>
                    </div>
                </li>
                <li data-thumb="/assets/images/case2-thumbnail.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/case1.jpg" alt="">
                        <div class="message_wrapper">
                            <!--<div class="name">Angela </div>-->
                            <!--<div class="company">xx科技</div>-->
                            <p>
曼恒数字是中国VR行业的杰出代表，新三板VR业务第一股，公司十年专注VR技术研发和积累，形成了行业应用和娱乐应用两个业务方向，是目前国内收入规模，市值，人数最大的VR企业。公司先后获得湖杉、软银赛富等几十家机构的投资，创始人同时担任中国文化娱乐行业协会虚拟现实专业委员会主任职务，公司及创始人在行业内有广泛的影响力。
                            </p>
                        </div>
                    </div>
                </li>
                <li data-thumb="/assets/images/case2-thumbnail.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/case1.jpg" alt="">
                        <div class="message_wrapper">
                            <!--<div class="name">Angela </div>-->
                            <!--<div class="company">xx科技</div>-->
                            <p>
昂华自动化是国内少有的可以提供工业4.0智能工厂完整解决方案的企业，公司集非标设备设计、加工、制造能力于一体，产品主要包括：机器人柔性系统、自动化装配设备、检测及测试设备、MES 系统、整线解决方案及智能工厂规划。产品广泛应用于汽车动力总成，汽车零
部件，新能源汽车动力系统，飞机制造等领域，可以满足客户的各种差异化需求。昂华秉承“诚信、责任、专业、坚持”的价值观，致力于成为高端装配制造行业的领军企业。

                            </p>
                        </div>
                    </div>
                </li>

                <li data-thumb="/assets/images/case1-thumbnail.jpg">
                    <div class="wrapper">
                        <img class="avatar" src="/assets/images/case1.jpg" alt="">
                        <div class="message_wrapper">
                            <div class="name">Angela </div>
                            <div class="company">xx科技</div>
                            <p>
苏州敏芯微电子技术有限公司成立于2007年，是国内最早的MEMS研发公司之一。管理团队具有深厚的半导体及MEMS产业背景，核心技术团队有多年在国内外顶尖大学从事MEMS与集成电路（IC）技术研究的经验。已申请和在申请专利累计已达70多项，拥有数项涉及MEMS关键技术的突破性发明和世界级科研成果。 敏芯微不仅填补了国内 MEMS 产业的空白，还将顺应世界半导体产业向中国转移的趋势，发展成为具有世界影响力的MEMS公司。 
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
                    @foreach($news as $new)
                    <li>
                    <div class="time" ><a href="/index/detail/{{$new->id}}"> {{ get_date($new->created_at) }} </a> </div><div class="title"> <a href="/index/detail/{{$new->id}}">{{$new->title}}</a></div>
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
                    <img src="/assets/images/weixin.png" alt="">
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
                        <p>上海陆家嘴西路1号 中国银行大厦22楼1022室
<br>
                    邮编: 28820      电话：231-232342 
<br>
                    传真：231-232323 </p>
                    </li>
                    <li>
                        <h3>香港</h3>
                        <p>维多利亚大街1号 香港银行大厦22楼1022室
                        <br>
                   电话：231-232342      传真：231-232323</p>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>
</div>

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
