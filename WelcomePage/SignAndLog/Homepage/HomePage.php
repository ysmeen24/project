<!DOCTYPE html>

<html>
    	<head>
        	<meta charset= "utf-8">
        	<title>Home page</title>
		<link rel = "stylesheet" type="text/css" href = "https://ysmeen24.github.io/project/CSS/Homepage.CSS">
		<script>
	  document.addEventListener('DOMContentLoaded', function(){
		(function(){
        		var sr = document.querySelectorAll('.my-star');
        		var i = 0;

        		while (i < sr.length){
				sr[i].addEventListener('click', function(){
	                var cs = parseInt(this.getAttribute("data-star"));
	                var pre = cs;
                  while(1 <= pre){
                    if(!document.querySelector('.star-'+pre).classList.contains('is-active')){
                        document.querySelector('.star-'+pre).classList.add('is-active');}
                    --pre;}

                var succ = cs+1;

                while(5 >= succ){
                    if(document.querySelector('.star-'+succ).classList.contains('is-active')){
                        document.querySelector('.star-'+succ).classList.remove('is-active');}
                    ++succ;}
            })
            i++;
        }

    })();

})
</script>
    	</head>
	<body>
		<h1 class="head">Choose a cuisine you wish to eat from!</h1>
        	<div class="first">
            <br>
        	<img src="https://images.unsplash.com/photo-1566950616521-335084348663?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"  alt="JapaneseFood"  width="300px" height="550px">
        	<a href="https://ysmeen24.github.io/project/WelcomePage/SignAndLog/Homepage/Cuisines/Japanese.html">
        	<br>
        	<button>Click here to see the Japanese cuisine</button>
        	</a>
        	</div> 

        	<div class="second">
        	<br>
        	<img src="https://images.unsplash.com/photo-1546549032-9571cd6b27df?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"  alt="Italian cuisine"  width="300px" height="550px">
        	<a href="https://ysmeen24.github.io/project/WelcomePage/SignAndLog/Homepage/Cuisines/Italian.html">
            <br>
            <button>Click here to see the Italian cuisine</button>
        	</a>
        	</div>

        	<div class="third">
            <br>
        	<img src="https://images.unsplash.com/photo-1626790291085-19a27173773c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80"  alt="American cuisine"  width="300px" height="550px">
        	<a href="https://ysmeen24.github.io/project/WelcomePage/SignAndLog/Homepage/Cuisines/American.html">
            <br>
            <button>Click here to see the American cuisine</button>
            </a>
        <br>
        </div>

        <div class="fourth">
            <br>
        <img src="https://images.unsplash.com/photo-1614514710295-129a2e3bbf24?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2012&q=80"  alt="Arabic cuisine"  width="300px" height="550px">
        <a href="https://ysmeen24.github.io/project/WelcomePage/SignAndLog/Homepage/Cuisines/Arabic.html">
            <br>
            <button>Click here to see the Arabic cuisine</button>
            </a>
        <br>
        </div>

        <div class="fifth">
        <br>
        <img src="https://images.unsplash.com/photo-1585937421612-70a008356fbe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=736&q=80"  alt="Indian cuisine"  width="300px" height="550px">
        <a href="https://ysmeen24.github.io/project/WelcomePage/SignAndLog/Homepage/Cuisines/Indian.html">
            <br>
            <button>Click here to see the Indian cuisine</button>
            </a>
        <br>
        </div>

        <div class="sixth">
        <br>
        <img src="https://images.unsplash.com/photo-1628394029816-1dc524670f60?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"  alt="Maxican cuisine"  width="300px" height="550px">       
        <a href="https://ysmeen24.github.io/project/WelcomePage/SignAndLog/Homepage/Cuisines/Mexican.html">
            <br>
            <button>Click here to see the Mexican cuisine</button>
            </a>
        <br>
        </div>
	  <h1 class="foot">Please rate our website :D!</h1>
	  <p class="star-rating">
    	  <i class="my-star star-1" data-star="1"></i>
    	  <i class="my-star star-2" data-star="2"></i>	
    	  <i class="my-star star-3" data-star="3"></i>
    	  <i class="my-star star-4" data-star="4"></i>
	  <i class="my-star star-5" data-star="5"></i></p>

	  <section></section>

    </body>
</html>
