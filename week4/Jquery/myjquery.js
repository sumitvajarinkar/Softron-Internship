// $(document).ready === $
$(document).ready(function () {
  //Your Jquery here
  // console.log(jQuery); console.log($); both same
  console.log("We are using jquery");

  // $('selector').action() syntax
  // $(#id).hide();
  // $(.class).hide();

  //   $("p").click(function () {
  //       console.log("Clicked on P", this);
  //       // $('p').click(); //click on p
  //     // $('p').hide();
  //     //    $(this).hide();

  // }); //do this we click on p

  //   $("p").dblclick(function () {
  //       console.log("Double Clicked on P", this);
  //       // $('p').click(); //click on p
  //     // $('p').hide();
  //     //    $(this).hide();

  // }); //do this we click on p

  //   $("p").mouseenter(function () {
  //       console.log("You entered : ", this);
  //       // $('p').click(); //click on p
  //     // $('p').hide();
  //     //    $(this).hide();

  // }); //do this we click on p

  //   $("p").hover(function () {
  //       console.log("You hovered : ", this);
  //       // $('p').click(); //click on p
  //     // $('p').hide();
  //     //    $(this).hide();

  // }); //do this we click on p

  // id selector
  // $("p2").click();
  // class selector
  // $(".p3").click();

  // Other selectors
  // $('*').click();
  //   $('p.p3').click();

  //   Events
  // Mouse events = click, doubleclick, mouseenter, mouseleave
  // keyboardEvent = kypress,keydown, keyup
  // FormEvent = submit, change, focus, blur
  // WindowEvent = load, resize, scroll, unload

  // On method
  // $("p").on({
  //   click:function() {
  //     console.log("Thanks for clicking", this);
  //   },
  //   mouseleave:function(){
  //     console.log('Mouse Leave');
      
  //   }
  // });



  // $('#lorem').hide();
  // $('#lorem').show();
  // $('#lorem').hide(1000);
  // $('#lorem').hide(1000,function(){
  //   console.log('Hidden');
    
  // });
  // $('#lorem').show(1000,function(){
  //   console.log('Show');
    
  // });
  // $('#btn').click(function(){
  //   $('#lorem').toggle(1000);
    
  // });
  //fadeToggle
  //fadeTo
  // $('#btn').click(function(){
  //   $('#lorem').fadeOut(1000);
    
  // });
  
  // $('#lorem').slideUp(1000);
  // $('#lorem').slideToggle(1000);

  // animate

  // $('#lorem').animate({
  //   opacity:0.3,
  //   height:'150px',
  //   width:'350px'
  // },"fast")

  $('#lorem').animate({opacity:0.3},4000);
  $('#lorem').animate({opacity:0.9},1000);
  $('#lorem').animate({width:'350px'},12000);
  // $('#lorem').stop()

  //form change
  // $('#ta').val('Sumit')
  // //html change
  // $('#ta').html('Sumit')
  // //text change
  // $('#ta').text('Sumit')
  // empty input
  // $('#ta').empty()
  // remove element
  // $('#ta').remove()
  // add class
  // $('#ta').addClass('myClass')
  // $('#ta').removeClass('myClass')

  //CSS
  // $('#ta').css('background-color','red')
  //$('#ta').css('background-color')

  // $.post('https://code.jquery.com/jquery-3.6.3.js',{name:'sumit',channel:'cwh'},function(data,status){alert(status)})
  // $.get('https://code.jquery.com/jquery-3.6.3.js',function(data,status){alert(data);})
});


/*
  Three main types of selectors
  1. element selector
  2. id selector
  2. class selector
  */
