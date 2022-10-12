/*var slidesIndex=0;
showslides();

function showslides()
{
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots= document.getElementsByClassName("dot");
    for(i=0;i<slides.length;i++)
    {
        slides[i].style.display="none";
    }
    slidesIndex++;
    if(slidesIndex > slides.length)
    {
        slidesIndex=1;
    }
    for(i=0; i<dots.length; i++)
    {
        dots[i].className= dots[i].className.replace(" active", "");
       
    }
    slides[slidesIndex-1].style.display="block";
    dots[slidesIndex-1].className+=" active";
    setTimeout(showslides, 2000);// change every image in 2 secs

}*/