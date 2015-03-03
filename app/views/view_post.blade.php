@extends('main_layout')

@section('content')

<article class="post-article">
    <div class="container post-container">
        <div class="row">
            <div class="col-sm-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <img src="{{asset('post_uploads'.'/'.$post->post_image)}}" class="img-responsive">
            </div>
        </div>
        <div class="row" id="post_thread">
            <div class="col-sm-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2 class="section-heading">{{$post->tag}}</h2>
                <p> {{nl2br(nl2br($post->description))}}</p>
            </div>
        </div>
        <div class="row">
            <div id="disqus_thread"></div>
            <script type="text/javascript">
                /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                var disqus_shortname = 'olamilekan'; // required: replace example with your forum shortname

                /* * * DON'T EDIT BELOW THIS LINE * * */
                (function() {
                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>
    </div>
</article>
@stop
