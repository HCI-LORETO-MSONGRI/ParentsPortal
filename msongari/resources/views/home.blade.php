@extends('layout')

@section('content')


<body>  
    <div class="slidercontainer">  
        <div class="showSlide fade">  
            <img src="images/image1.jpg" />      
        </div>  
        <div class="showSlide fade">  
            <img src="images/image2.jpg"/>    
        </div>  
  
        <div class="showSlide fade">  
            <img src="images/image3.jpg"/>    
        </div>  
        <div class="showSlide fade">  
            <img src="images/image4.jpg"/>  
            <div class="content">Lorem ipsum dolor sit amet</div>  
        </div>  
        <!-- Navigation arrows -->  
        <a class="left" onclick="nextSlide(-1)">❮</a>  
        <a class="right" onclick="nextSlide(1)">❯</a>  
    </div> 


    <script type="text/javascript">  
        var slide_index = 1;  
        displaySlides(slide_index);  
        
        function nextSlide(n) {  
            displaySlides(slide_index += n);  
        }  
        function currentSlide(n) {  
            displaySlides(slide_index = n);  
        }  
        function displaySlides(n) {  
            var i;  
            var slides = document.getElementsByClassName("showSlide");  
            if (n > slides.length) { slide_index = 1 }  
            if (n < 1) { slide_index = slides.length }  
            for (i = 0; i < slides.length; i++) {  
                slides[i].style.display = "none";  
            }  
            slides[slide_index - 1].style.display = "block";  
        }  
</script>    
</body>   

@endsection