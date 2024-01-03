<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Class</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .active{
            background-color:red;
        }
        table, th, td{
            border-collapse:collapse;
            padding:10px;
        }
    </style>
</head>
<body>








<!-- <button id="for_new_toggle">Click Here</button>
<div style="width:100px;height:100px;background:pink;"></div>

<script>
    $(document).ready(function(){
        $("#for_new_toggle").click(function(){
            confirm("This is for confirm box");
            $("div").toggle("slow");
        });
    });
</script> -->

<!-- <div style="width:101px;height:100px;background:pink;padding:10px;"></div>

<button>Width Check</button>
<span class="width"></span>
<span class="height"></span>
<script>
    $(document).ready(function(){
        $("button").click(function(){
           var a = $("div").width();
           var b = $("div").height();
           $(".width").text("Width: " + a + "px");
           $(".height").text("Height: " + b + "px");
        });
    });
</script> -->


<!-- --------------------------------------------------------- -->
<!-- Jquery Dimension methods -->
<!-- width()
height()
innerWidth()
innerHeight()
outerWidth()
outerHeight() -->

<!-- -------------------------------------------------------- -->
<!-- 
<div style="background:yellow;width:150px;padding:10px;">
    <p>First paragraph</p>
    <p>Second paragraph</p>
    <p>Third paragraph</p>
    <h3>This is heading</h3>
</div>
<button>Click Here</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("<h3>Replace All Element</h3>").replaceAll("div p");
        });
    });
</script> -->

    
<!-- ---------------------------------------------------------- -->

<!-- <div style="background:yellow;width:150px;padding:10px;">
    <p>First paragraph</p>
    <p>Second paragraph</p>
    <p>Third paragraph</p>
    <h3>This is heading</h3>
</div>
<button>Click Here</button>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div p:first-child").replaceWith("<h2>Replace With paragraph</h2>");
            $("div h3").replaceWith("<i>Replace With Heading</i>");
        });
    });
</script> -->


<!-- ---------------------------------------------------- -->

<!-- <p>This is text</p>
<button>Click Here</button> -->
<!-- <script> -->
<?php //for($i = 1; $i <= 5; $i++) { ?>
    
        <!-- $(document).ready(function(){
            $("button").click(function(){
                $("p").append("This is appned text" + "<br>");
            });
            
        }); -->
    
<?php //} ?>
<!-- </script> -->



<!-- ----------------------------------------------------------------------- -->

<!-- 
<p class="test">remove class</p>
<button>Remove Class</button>
<style>
    .test{
        background:yellow;
        height:50px;
        width: 100px;
        padding: 10px;;
    }
</style>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").remove(".test");
        });
    });
</script> -->

<!-- --------------------------------------------------------------- -->

<!-- <div class="test" style="background:yellow;border:1px solid;width:200px;padding:10px;height:150px;">
    <p>This is first paragraph</p>
    <p>This is first paragraph</p>
    <h3>First is first paragraph</h3>
</div>
<br>
<div class="test2" style="background:yellow;border:1px solid;width:200px;padding:10px;height:150px;">
    <p>This is first paragraph</p>
    <p>This is first paragraph</p>
    <h3>Second is first paragraph</h3>
</div>

<button>Remove Method</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $(".test, .test2").empty();
        });
    });
</script> -->


<!-- ----------------------------------------------- -->

<!-- <div class="test">
    <p>This is first paragraph</p>
    <p>This is first paragraph</p>
    <h3>First is first paragraph</h3>
</div>
<div>
    <p>This is first paragraph</p>
    <p>This is first paragraph</p>
    <h3>Second is first paragraph</h3>
</div>

<button>Remove Method</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $(".test p").remove();
        });
    });
</script> -->

<!-- ----------------------------------------------------- -->

<!-- <p>This is before element</p>
<button class="before_add_text">Before Add Text</button>
<script>
    $(document).ready(function(){
        $(".before_add_text").click(function(){
            $("p").before("<h4>This is before add text</h4>");
        });
    });
</script> -->


<!-- ----------------------------------------------------- -->
<!-- 
<p>This is after element</p>
<button class="after_add_text">After Add Text</button>
<script>
    $(document).ready(function(){
        $(".after_add_text").click(function(){
            $("p").after("<span>This is add text (after)</span>");
        });
    });
</script> -->


<!-- ---------------------------------------------- -->
<!--     
<a href="https://www.w3schools.com/">Click Here</a>
<button id="ad_value">Add New Value</button>


<script>
    $(document).ready(function(){
        $("#ad_value").click(function(){
            $("a").attr({
                "href": "https://www.w3schools.com/jquery/default.asp",
                "target": "_blank"
            });
        });
    });
</script> -->



<!-- --------------------------------------------------------------- -->

<!-- <a href="https://www.w3schools.com/">Click Here</a>
<button id="ad_value">Add New Value</button>
<script>
    $(document).ready(function(){
        $("#ad_value").click(function(){
            $("a").attr("href", "https://www.w3schools.com/jquery/default.asp");
        });
    });
</script> -->

<!-- ---------------------------------------------------------------------- -->


<!-- <script>
    function firstFunction() {
        // var text1 = "<p>Text 1</p>";
        var text2 = $("<p></p>").text("Text 2");
        // var text3 = document.createElement("p");
        // text3.innerHTML = "Text 3";
        $("body").append(text2);
    }  
</script>


<p>This is fucntion in jQuery</p>

<button onclick="firstFunction()">Add Text</button> -->



<!-- ------------------------------------------------------------------------- -->
<!-- set value through text(), html(), val() -->
<!-- <button id="text">Text</button>
<button id="html">HTML</button>
<button id="val">Val</button>
<button id="attr">attr</button> -->
<!--  -->
<!-- <p class="p1">This is for Text</p>
<p class="p2">This is for <b>HTML</b></p>
<input type="text" value="Custome Value">

<style>
    .red{
        color:red;
    }
</style>
<p id="for_attr">This is for attr value set</p>
<script>
    $(document).ready(function(){
        $("#text").click(function(){
            $(".p1").text("New text");
        });
        $("#html").click(function(){
            $(".p2").html("<i>New html</i>");
        });
        $("#val").click(function(){
            $("input").val("New Value");
        });
        $("#attr").click(function(){
            $("p#for_attr").attr("class","red");
        });
    });
</script> -->


<!-- ------------------------------------------------------------------- -->
<!-- attr method for get attributes value -->
<!-- <button>Get Attributes Value</button>
<a href="https://www.w3schools.com/">W3 School</a>
<input type="text" name="attr method">
<script>
    $(document).ready(function(){
        // $("button").click(function(){
        //     alert($("a").attr("href"));
        // });

        $("button").click(function(){
            // alert($("input").attr("type"));
            alert($("input").attr("name"));
        });
    });

</script> -->


<!-- -------------------------------------------------------------------- -->

<!-- Val method -->
<!-- <button>Get Val</button>
<input type="text" value="This is val method">

<script>
    $(document).ready(function(){
        $("button").click(function(){
            // console.log($("input").val());
            alert($("input").val());
        });
    });
</script> -->


<!-- ----------------------------------------------------------------- -->
<!-- Text and HTML methods -->
<!-- <button class="btn1">Text</button>
<button class="btn2">HTML</button>
<p>This is for <b>Text</b> <b>HTML</b></p>
<script>
    $(document).ready(function(){
        $(".btn1").click(function(){
           console.log("For Text: " + $("p").text());
        });
        $(".btn2").click(function(){
           console.log("For HTML:" + $("p").html());
        });
    });
</script> -->


<!-- --------------------------------------------------------- -->

<!-- <button>Click Here</button>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            var a = [1, 2, 3, 4, 5];
            // console.table(a);
            // console.log(a);
            // console.error(a);
            // console.time("test");
            // console.warn("This is just a warning");
            // console.warn("This is just a warning");
            // console.warn("This is just a warning");
            // console.warn("This is just a warning");
            // console.warn("This is just a warning");
            // console.warn("This is just a warning");
            // console.warn("This is just a warning");
            // console.timeEnd("test");
            // console.clear(); // use for all console command clear
        });
    });
</script> -->

<!-- --------------------------------------------------------- -->

<!-- <script>
    i = 1;
    while(i <= 10) {
        document.write(i);
        i++;
    }
</script> -->


<!-- <script>
    var i = 1;
    do{
      document.write(i);
      i++;
    } while(i <= 10)
</script> -->


<!-- <script>
    for(i = 1; i <= 5; i++) {
        for(j = 1; j <= i; j++) {
            document.write("* ");
        }
        document.write("<br>");
    }
</script> -->


<?php 

// for($i = 1; $i <= 5; $i++) {
//     for($j = 1; $j <= $i; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }
?>


<!-- <script>

for(i = 1; i <= 10; i++) {
    document.write(i*2 + " ");
}
</script>
 -->


<!-- ---------------------------------------------------------- -->

<!-- This is Chaining method in jQuery -->


<!-- <button>Click Here</button>

<p>This is Chaining Method</p>


<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").hide(1500).show(1500).css("color","red");
        });
    });
</script> -->




<!-- Callback function in JQuery -------------------  -->


<!-- <button>Click here</button>
<p>This is callback function</p>


<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").hide(2000, function(){
                $("p").show(2000, function(){
                    $("p").append(" Custome item");
                });
            });
        });
    });
</script> -->


<!-- <button>Click here</button>

<p>This is callback function</p>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").hide("slow", function(){
                $("p").show(2000, function(){
                    $("p").css({"background":"red","padding":"10px","width":"100px","color":"#fff"});
                });
            });
        });
    });
</script> -->



<!-- <button>Hide</button>

<p>This is callback function</p>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").hide(2000, function(){ // first hide will show and then callback function wil run
                alert("This is callback function");
            });
        });
    });
</script> -->






<!-- ------------------------------------------------------------- -->
<!-- <button class="Slide">Slide</button>
<button class="Stop">Stop</button>

<div style="background:pink;padding:10px;width:300px;display:none;height:100px;">This is stop Animation</div>

<script>
    $(document).ready(function(){
        $("button.Slide").click(function(){
            $("div").slideDown(3000);
        });
        $(".Stop").click(function(){
            $("div").stop();
        });
    });
</script> -->


<!-- ---------------------------------------------------- -->
<!-- $(selector).animate({params}, speed, callback); -->


<!-- <button style="background:red;color:white;border:0;padding:10px;position:relative;">Click Here</button>
<style>
    .box{
        height:400px;
        width:400px;
        background-color: pink;
        margin-left: 81px;
    }
</style>
<div class="box"></div>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            var forAnimate = $(this);
            forAnimate.animate({left: '458px'});
            forAnimate.animate({rotate: '90deg'});
            forAnimate.animate({top: '436px'});
            forAnimate.animate({rotate: '180deg'});
            forAnimate.animate({left: '22px'});
            forAnimate.animate({rotate: '270deg'});
            forAnimate.animate({top: '0'});
            forAnimate.animate({rotate: '360deg'});
            
        });
    });
</script> -->



<!-- 
<button class="animation">Animation</button>
<div style="background:red;height:100px;width:100px;position:absolute;"></div>

<script>
  
  $(document).ready(function(){
    // $(".animation").click(function(){
    //     $("div").animate({left: '400px'}, "slow");
    //     $("div").animate({top: '400px'}, "slow");
    //     $("div").animate({left: '0'}, "slow");
    //     $("div").animate({top: '30px'}, "slow");
    // });

// Second way for above animation code ---
    // $(".animation").click(function(){
    //     var queueName = $("div");
    //     queueName.animate({left: '400px'}, "slow");
    //     queueName.animate({top: '400px'}, "slow");
    //     queueName.animate({left: '0'}, "slow");
    //     queueName.animate({top: '30px'}, "slow");
    // });
  });
</script> -->


<!-- <script>
    $(document).ready(function(){

        // $(".animation").click(function(){
        //     $("div").animate({left: '250px'}, 1000);
        // });

        
        // $(".animation").click(function(){
        //     $("div").animate({
        //         height: 'toggle'
        //     });
        // });
      
        
        // $(".animation").click(function(){
        //     $("div").animate({
        //         left: '250px',
        //         height: '150px',
        //         width: '1500px',
        //         borderRadius: '20px'
        //     });
        // });
    });
</script>
 -->



<!-- <script>
    $(document).ready(function(){
        $(".animation").click(function(){
            $("div").animate({left:'250px'});
        });
    });
</script> -->



<!-- ------------------------------------------------------------ -->

<!-- <button class="slideToggle">slideToggle</button>
<p style="background:pink; width:200px;height:50px;">This is slideToggle Effect</p>
<script>
    $(document).ready(function(){
        $(".slideToggle").click(function(){
            $("p").slideToggle("slow");
        });
    });
</script> -->

<!-- -------------------------------------------------- -->
<!-- <button class="slideUp">slideUp</button>

<p style="background:pink; width:200px;height:50px;">This is slideUp Effect</p>

<script>
    $(document).ready(function(){
        $(".slideUp").click(function(){
            $("p").slideUp("slow");
        });
    });
</script> -->



<!-- ------------------------------------------------------------- -->

<!-- <button class="slideDown">slideDown</button>
<p style="background:pink; width:200px;height:50px;display:none;">This is slideDown Effect</p>
<script>
    $(document).ready(function(){
        $(".slideDown").click(function(){
            $("p").slideDown("slow");
        });
    });
</script> -->



<!-- -------------------------------------------------------------- -->

<!-- <button class="for_fade_to" style="padding:20px; background:red;">fadeTo</button>

<script>
    $(document).ready(function(){
        $(".for_fade_to").click(function(){
            $(this).fadeTo("slow", 0.15);
        });
    });
</script> -->




<!-- ---------------------------------------------------- -->

<!-- <button>fadeToggle</button>
<ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
    <li>Item 4</li>
</ul>


<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("ul").fadeToggle();
        });
    });
</script> -->


<!-- --------------------------------------- -->

<!-- <button>fadeOut Effect</button>
<ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
</ul>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("ul").fadeOut();
        });
    });
</script> -->


<!-- ---------------------------------------------------------- -->

<!-- <button>fadeIn Effect</button>
<ul style="display:none;">
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
</ul>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("ul").fadeIn();
        });
    });
</script> -->


<!-- ---------------------------------------------------- -->


<!-- 

<table id="data-table" border="1" width="400">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th><button class="add_more">+</button></th>
    </tr>
    <tr>
        <td><input type="text" name="name"></td>
        <td><input type="email" name="email"></td>
        <td><button class="remove">X</button></td>
    </tr>
</table>


<script>
    $(document).ready(function(){
        $(".add_more").click(function(){
            let tableRow = '<tr>\
        <td><input type="text" name="name"></td>\
        <td><input type="email" name="email"></td>\
        <td><button class="remove">X</button></td>\
    </tr>';

       $("#data-table").append(tableRow);
        // $("#data-table").html(tableRow);
  
        // $(".remove").click(function(){
        //     $(this).closest("tr").remove();
        // });


        $("#data-table").delegate(".remove", "click", function(){
            $(this).closest("tr").remove();
        });

    });
       
    });
</script> 
 -->


<!-- 
<script>
    $(document).ready(function(){
        $(".add_more").click(function(){

            let test = '<tr>\
            <td><input type="text" name="name"></td>\
            <td><input type="email" name="email"></td>\
            </tr>';

            $("#data-table").append(test);

        });
    });
</script> -->


<!-- ----------------------------------------------- -->
<!-- Delegate function in jQuery -->

<!-- <div>
    <h3>This is heading</h3>
</div>


<script>
    $(document).ready(function(){
        $("div").delegate("h3", "click", function(){
            $(this).css("color","red");
        });
    });
</script> -->



<!-- ---------------------------------------------- -->

<!-- <button>Prepend To</button>
<ul>
    <li>Prepend To</li>
</ul>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("<li>New item</li>").prependTo("ul");
        });
    });
</script> -->



<!-- ------------------------------------------- -->
<!-- <button>append To</button>
<ul>
    <li>append To</li>
</ul>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("<li>New item</li>").appendTo("ul");
        });
    });
</script> -->


<!-- --------------------------------------- -->
<!-- For Prepend -->


<!-- <button>Prepend</button>
<ul>
    <li>This is Prepend function in jQuery</li>
</ul>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("ul").prepend("<li>New item..</li>");
        });
    });
</script> -->


<!-- ------------------------------------- -->

<!-- 
<button>+</button>
    <ol>
    <li>This is li tag</li>
    </ol>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("ol").append("<li>New item</li>")
        });
    });
</script> -->


<!-- ---------------------------------------- -->

<!-- <p>This is paragraph</p>

<button>Append P</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").append("<h4>This is append Heading.</h4>");
        });
    });
</script> -->




<!-- ---------------------------------------- -->

<!-- <button class="btn">Button 1</button>
<button class="btn">Button 1</button>
<button class="btn">Button 1</button>


<script>
    $(document).ready(function(){
        $(".btn").click(function(){
            $(this).toggleClass("active");
        });
    });
</script>  -->



<!-- ------------------ -->

<!-- <button class="hide_show">Hide/Show</button>
<button class="for_show">Show</button>
<button class="for_hide">Hide</button>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>

<script>
    $(document).ready(function(){
        $(".hide_show").click(function(){
            $("p").toggle(300);
        });
        $(".for_show").click(function(){
            $("p").show();
        });
        $(".for_hide").click(function(){
            $("p").hide();
        });
    });
</script> -->





</body>
</html>