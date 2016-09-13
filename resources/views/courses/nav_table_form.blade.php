@extends('layouts.app', ['links' => $links])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <section id="ch12">
                <h1>chapter 11: Formatting Tables and Forms</h1>
                <div  id="ch12-section1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Using Tables the Right Way
                            </h3>
                        </div>
                        <div class="panel-body">
                            <p>HTML tables have seen a lot of use in the short history of the Web. Originally cre- ated to display data in a spreadsheet-like format, tables became a popular layout tool. Faced with HTML’s limitations, designers got creative and used table rows and columns to position page elements like banner headlines and sidebars. As you’ll see in Part Three of this book, CSS does a much better job of laying out web pages. You can concentrate on using (and formatting) tables for their original purpose— displaying data (Figure 11-1: p376).</p>
                        </div>
                    </div>
                </div>
                <div  id="ch12-section2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Styling Tables
                            </h3>
                        </div>
                        <div class="panel-body">
                            <h4>
                                using div when no other semanticly more appropriate tag available
                            </h4>
                            <h4> HTML 5 Sectioning Elements </h4>
                            <p>the new HTML5 elements are intended to add seman- tics to a web page</p>
                            <h4>Techniques for CSS Layout</h4>
                            <p>The vast majority of web pages use the CSS float property for layout</p>
                        </div>
                        <div class="panel-footer">
                            p 250;
                        </div>
                </div></div>
                <div  id="ch12-section3"><div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Layout Strategies
                            </h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>Start with Your Content</li>
                                <li>Mobile First.Mobile First design is about starting with your content, but it’s also about getting rid of extraneous noise— including supplementary information that fits fine on a large desktop screen, but merely gets in the way on the smaller screen and detracts from the key information you’re hoping to deliver.</li>
                                <li>css 3 lyaout options
                                    <ul>
                                        <li>multicolumn layout module</li>
                                        <li>flexible box <p>https://css-tricks.com/snippets/css/a-guide-to-flexbox/</p></li>
                                        <li>grid layout</li>
                                    </ul>
                                </li>
                                <li>Start with a Sketch</li>
                                <li>Identify the Boxes</li>
                                <li>Go with the Flow</li>
                                <li>Remember Background Images</li>
                                <li>Pieces of a Puzzle</li>
                                <li>Layering Elements</li>
                                <li>Don’t Forget Margins and Padding</li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            p 250;
                        </div>
                </div></div>
            </section>
</div>

<div class="col-md-3 manuscript-sidebar" id="myScrollspy">
    <ul class="nav nav-stacked" data-offset-top="80" data-spy="affix">
        <li>
            <a href="#ch12">chapter 12: Introducint CSS Layout</a>
            <ul class="nav nav-stacked">
                <li><a href="#ch12-section1">Types of Web Page Layouts</a></li>
                <li><a href="#ch12-section2">Start with a Sketch</a></li>
                <li><a href="#ch12-section3">Layout Strategies</a></li>
            </ul>
        </li>
        <li>
            <a href="#ch11">chapter 11: Formatting Tables and Forms</a>
            <ul class="nav nav-stacked">
                <li><a href="#ch13-section0">Introduction</a></li>
                <li><a href="#ch13-section1">Applying Floats to Your Layouts</a></li>
                <li><a href="#ch13-section2">Overcoming FLoat Problems</a></li>
            </ul>
        </li>
        <li><a href="#review">Review</a></li>
    </ul>
</div>
</div>
        </div>

        <div style=" background-color: #fff; position: fixed; right: 40px; bottom: 40px; border-radius:20px; border: 2px solid #1f86ed; width: 40px; height : 40px; text-align:center; ">

            <a href="#top" style="font-size: 16px; line-height: 36px; color:#1f86ed; display:block;" >Top</a>
        </div>
        @endsection
