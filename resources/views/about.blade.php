@extends('layouts.main')

@section('title', 'About Code Thesaurus')

@section('content')
        <div class="container">
            <div class="row mt-5">
                <h2 class="col-12">About Code Thesaurus</h2>
            </div>

            <div class="row">
                <div class="col-12 mt-3">
                    Code Thesaurus is a system that allows you to compare structures of programming languages side-by-side
                    in an easy to learn way. It's a great method for learning a new programming language after you
                    already know one, or to quickly use as a cheat sheet or a reference tool. It's designed to help
                    take out the verbosity of language documentation and simplify the way to get quick answers when
                    you're stuck in a bind.
                </div>
            </div>

            <div class="row mt-5">
                <h2 class="col-12">History</h2>
            </div>

            <div class="row">
                <div class="col-12 mt-3">
                    The concept of Code Thesaurus was invited by Sarah Withee back in 2015. She was approached by
                    another developer on a Slack team and was asked if she could help debug something in Ruby, a
                    language she hadn't used before. Having used about six languages before, she looked at the code and
                    found the issue. The problem was she didn't know how to fix it. After rummaging through Ruby's
                    documentation and not finding what she was looking for, she knew how to do it in another language
                    and wished she could just compare them side-by-side instead.
                </div>
                <div class="col-12 mt-3">
                    Time and time again, she ended up either working in a new language at a job, staring at someone
                    else's code, or trying to fix some issue somewhere that she knew, in concept how to fix, but just
                    struggling digging through documentation trying to find that right solution.
                </div>
                <div class="col-12 mt-3">
                    She searched for a long time trying to find someone that had built such a tool already. She found
                    numerous cheat sheets, or examples of programming problems written in several languages, but not
                    syntactical comparisons. After about a year of trying to think through the problem of "How could
                    you compare <em>any</em> two languages together?" as well as "How do I build a system that is
                    easy and encouraging to add language meta data to?", she finally started slowly working on this
                    project.
                </div>
                <div class="col-12 mt-3">
                    The base of the project was mostly built during Hacktoberfest 2018 and Hacktoberfest 2019.
                </div>
            </div>


        </div>

@endsection