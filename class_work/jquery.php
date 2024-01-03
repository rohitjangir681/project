<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Class</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
    .for_toggle {
        background: yellow;
    }
    .scroll{
        width:150px;
        height:300px;
        overflow: auto;
    }
    #event_page{
        height:200px;
        width:200px;
        background:pink;

    }
    .for_border{
        border-color:red;
    }
    </style>

</head>

<body>


    <!-- <script>
    $(document).ready(function() {
        // code will be here.......
    });
    </script> -->

    <!-- 
Selectros in jQuery------

There are many types of selectros in jQuery--

$("p")
$("#id")
$(".class")
$(this)
$("*")
$("p.test")
$("p:first")
$("ul li:first") // first li, first ul
$("ul li:first-child")
$("[href]")
$("a[target='_blank']")
$("a[target!='_blank']")
$(":button")
$("tr:even")
$("tr:odd")
-->

    <!-- 

Events in jQuery---

There are several types of events in jQuery:

-Mouse events:
click
dblclick
mouseenter
mouseleave

Form event:
submit
blur
change
focus

Document/window events:
scroll
load
unload
resize

keyboard event:
keypress
keydown
keyup
-->



<!-- <style>
    .change{
        background: pink;
    }
</style>
<input type="text">

<script>
    $(document).ready(function(){
        $("input").change(function(){
            // alert("This is change event in jquery.");
            // console.log("This is for change function.......");
            $(this).addClass("change");
        });
    });
</script>
 -->



  <!-- // if($_SESSION["for_day"] == "$i") {
              //   echo "<option selected>$i</option>";
              // } else {
              //   echo "<option value='$i'> $i </option>";
              // } -->

<!-- -------------------------------------------- -->


<!-- <a href="https://www.w3schools.com/" id="for-prevent">For prevent default</a><br><br>
<a href="#">Demo paragraph</a>

<h3></h3>

<script>
    $(document).ready(function(){
        $("#for-prevent").click(function(event){
            event.preventDefault();

            var a = event.isDefaultPrevented();
            $("h3").html(a);
        });
    });
</script> -->




<!-- ------------------------------------------------------ -->


<!-- <div id="event_page">
    <h2>h2 Heading</h2>
    <p>Paragraph</p>
    <button>Click here</button>
</div>

<h3></h3>


<script>
    $(document).ready(function(){
        $("#event_page").click(function(event){
            $("h3").html("Target element:" + event.target.nodeName);
        });
    });
</script> -->




<!-- -------------------------------------------------------------------------- -->


    <!-- <form action="" id="sform">
        Name: <input type="text" id="sname"><br><br>
        Class: <input type="text" id="sclass"><br><br>
        Country: <select id="scountry">
            <option value="One">One</option>
            <option value="Two">Two</option>
            <option value="Three">Three</option>
            <option value="Four">Four</option>
        </select><br><br>
        <input type="submit" id="submit">
    </form>

<script>
    $(document).ready(function(){
      $("#sform").submit(function(event){
        sname = $("#sname").val();
        isPrevent = false;

        if(sname == "") {
           isPrevent = true;
           $("#sname").addClass("for_border");
        }

        if(isPrevent) {
        event.preventDefault();
    }

      });
    });
</script> -->




<!-- -------------------------------------------------- -->



    <!-- <form action="" id="sform">
        Name: <input type="text" id="sname"><br><br>
        Class: <input type="text" id="sclass"><br><br>
        Country: <select id="scountry">
            <option value="One">One</option>
            <option value="Two">Two</option>
            <option value="Three">Three</option>
            <option value="Four">Four</option>
        </select><br><br>
        <input type="submit" id="submit">
    </form>

<script>
    $(document).ready(function(){
      $("#sform").submit(function(event){
        event.preventDefault();

      });
    });
</script> -->


    

<!-- ------------------------------------------------------------ -->



<!-- 
<div id="event_page"></div>
    <h3></h3>
<script>
    $(document).ready(function(){
        $("#event_page").on("click dblclick mouseover mouseout", function(event){
            $("h3").html("Event:" + event.type);
        });
    });
</script>
 -->



<!-- -----------------------------------------------------  -->


<!-- 
<div id="event_page"></div>
<script>
    $(document).ready(function(){
        $(document).mousemove(function(event){
            $("#event_page").text("X " + event.pageX + " --Y " + event.pageY);
            var a = event.pageX;
            var b = event.pageY;
            var c = a+b;
            $("span").text(c);
        });
    });
</script>

<span>Total: </span> -->


<!-- <div class="scroll">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</div> -->



<!-- 
<p>0</p>

<script>
    var a = 0;
    $(document).ready(function(){
        $(".scroll").scroll(function(){
            $("p").text(a += 1);
        });
        
    });
</script> -->


<!-- --------------------------------------------------------------- -->


        <!-- <script>
    $(document).ready(function(){
        $(window).scroll(function(){
            console.log("This is scrolling....");
        });
    });
</script> -->


        <!-- ------------------------------------------------------  ---- -->


        <!-- 
<button>For HTML</button>
<div class="click_here">
    <p>Paragraph</p>
    <h4>Heading</h4>
</div>

<div class="insert_html">

</div> -->


        <!-- <script>
    $(document).ready(function(){
        // $("button").click(function(){
        //     var a = $(".click_here").html();
        //     $(".insert_html").text(a);
        // });
    });
</script> -->



        <!-- <script>
    $(document).ready(function(){
        $("#sname, #sclass").on({
            focus: function(){
                $(this).css("background","yellow");
            },
            blur: function(){
                $(this).css("background","");
            },
            keypress: function(){
                $(this).css({"background":"green"});
      },
     select: function(){
      $(this).css("background-color","red");
     }

        });
    });
</script>
 -->

        <!-- ----------------------------------- -->

        <!-- 
<script>
    $(document).ready(function(){
        $("#sname").on("mouseover mouseout",function(){
            $(this).toggleClass("for_toggle");
        });

        // $("#sclass").on("mouseout", function(){
        //     $(this).css("background","yellow");

        // });
    });
</script> -->

        <!--   -------------------------------------   -->

        <!-- <button>Click Here</button>
<p>This is for toggleClass</p>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").toggleClass("for_toggle");
        });
    });
</script> -->


        <!--  ----------------- -->

        <!-- <button>Click Here</button>
<p>This is toggle function</p>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").toggle();
        });
    });
</script> -->



        <!-- 
<p id="for_on">This is on event</p>
<script>
    $(document).ready(function(){
        $("#for_on").on("click",function(){
                $(this).css("background","yellow");
        });
    });
</script> -->


        <!-- ------------------------------------------------------------------- -->


        <!-- <form action="" id="sform">
    Name: <input type="text" id="sname"><br><br>
    Class: <input type="text" id="sclass"><br><br>
    Country: <select id="scountry">
        <option value="One">One</option>
        <option value="Two">Two</option>
        <option value="Three">Three</option>
        <option value="Four">Four</option>
    </select><br><br>
    <input type="submit">
</form> -->


        <!-- <script>
    $(document).ready(function(){
        $("#sform").submit(function(){
            alert("form is being submitted..");
        });
    });
</script> -->



        <!-- <script>
    $(document).ready(function(){
        $("#sname").select(function(){
            $(this).css("background","red");
        });
        $("#sname").blur(function(){
            $(this).css("background","");
        });
    });
</script> -->



        <!-- <p id="test"></p>

<script>
    $(document).ready(function(){
        $("#scountry").change(function(){
            var a = $(this).val();
            $("#test").html(a);
        });
    });
</script> -->




        <!-- <script>
    $(document).ready(function(){
        $("#scountry").change(function(){
            $(this).css("background","pink");
        });
        $("#scountry").blur(function(){
            $(this).css("background","");
        });
    });
</script> -->



        <!-- <script>
    $(document).ready(function(){
        $("#sname, #sclass").focus(function(){
            $(this).css("background","yellow");
        });
        $("#sname, #sclass").blur(function(){
            $(this).css("background","");
        });
    });
</script>
 -->


        <!-- <script>
    $(document).ready(function(){
        $("#sname").blur(function(){
            $(this).css("background","yellow");
        });
    });
</script> -->


        <!-- <script>
    $(document).ready(function(){
        $("#sname, #sclass").focus(function(){
            $(this).css("background-color","yellow");
        });
    });
</script> -->


        <!-- ------------------------------------------ -->

        <!-- <form action=""><input type="text"></form>
<span>0</span>
<script>
    i = 0;
     
    $(document).ready(function(){
        $("input").keypress(function(){
            $("span").text(i += 1);

        });
    });

</script> -->



        <!-- ---------------------------------------------------- -->


        <!-- <button>This is text funtion in jQuery</button>

<p>This is replace paragraph</p>
<p>This is replace Second paragraph</p>
<h4>This is heading</h4>


<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").text("Change this text");
        });
    });
</script> -->





        <!-- --------------------------- -->

        <!-- <p>This is</p>
<button>Click Here</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").css({
                "background-color":"red",
                "color":"#fff",
                "transition":".3s",
                "width":"100px",
                "height":"100px"
            });
        });
    });
</script> -->

        <!-- --------------------------- -->

        <!-- <form>
    Smooth: <input type="text">
</form>

<script>
   $(document).ready(function(){
    $("input").keypress(function(){
        $(this).css({"margin-left":"60px", "transition":".6s"});
    });
   });
</script>
 -->



        <!-- <script>
    $(document).ready(function(){
        $("input").keyup(function(){
            $(this).css({"background-color":"pink"});
        });
    });
</script> -->



        <!-- <script>
    $(document).ready(function(){
        $("input").keydown(function(){
            $(this).css({"background-color":"lightgray"});
        });
    });
</script> -->


        <!-- <script>
    $(document).ready(function(){
        $("input").keypress(function(){
            $(this).css({"background-color":"yellow"});
        });
    });
</script> -->


        <!-- ------------------------------------------------ -->

        <!-- <button class="css_button">Click Here</button>

<script>
    $(document).ready(function(){
        $(".css_button").mouseenter(function(){
            $(this).css({"background-color":"red", "color":"#fff", "padding":"20px", "border":"0", "border-radius":"50px"});
        });
        $(".css_button").mouseleave(function(){
            $(this).css({"background-color":"black"});
        });
    });
</script> -->



        <!-- ------------------------------------------- -->

        <!-- <form>
    Mouse Enter: <input type="text">
</form>



<script>
    $(document).ready(function(){
        $("input").mouseenter(function(){
            $(this).css({"background-color":"yellow"});
        });
        $("input").mouseleave(function(){
            $(this).css({"background-color":"lightgray"});
        });
    });
</script> -->



        <!-- <script>
    $(document).ready(function(){
        $("input").mouseleave(function(){
            $(this).css({"background-color":"lightgray"});
        });
    });
</script> -->



        <!-- <script>
    $(document).ready(function(){
        $("input").mouseenter(function(){
            $(this).css({"background-color":"yellow"});
        });
    });
</script> -->

        <!-- --------------------------------------- -->


        <!-- <p>This is dblclick event (mouse event)</p>
<button>DBLClick</button>

<script>
    $(document).ready(function(){
        $("button").dblclick(function(){
            $("p").css({"color":"red", "border":"1px solid"});
        });
    });
</script> -->



        <!-- <p>This is click event</p>

<script>
    $(document).ready(function(){
        $("p").click(function(){
            $("p").css({"background":"red", "color":"#fff"});
        });
    });
</script> -->




        <!-- ========================================== -->


        <!-- <div class="hide_paragraph">
    <span>This is red color
<p>hide function in jQuery</p>
</span>
</div>
<p>This is other paragraph</p> -->
        <!-- <button id="button">Click Here</button>
<button id="button2">Click Here2</button> -->


        <!-- <script>
    $(document).ready(function(){
        $("#button").click(function(){
            if($("p").parent().is("span")){
                alert("Yes, This is parent..");
            } else {
                alert("No, This is not parent..");
            }
        });
    });
</script> -->



        <!-- <script>
    $(document).ready(function(){
        $("p").parent().css({"color":"red"});
        // $("p").parent().css({"color": "red", "border": "2px solid red"});
    });
</script> -->




        <!-- <script>
    $(document).ready(function(){
        $("#button").click(function(){
            $(".hide_paragraph p").hide();
        });
        $("#button2").click(function(){
            $(".hide_paragraph p").show();
        });
    });
</script> -->




        <!-- <script>
    $(document).ready(function(){
        $("#button").click(function(){
            $(".hide_paragraph p").hide();
        });
    });
</script> -->


        <!-- <script>
    $(document).ready(function(){
        $("#button").click(function(){
            $(this).hide();
        });
    });
</script> -->

        <!-- ========================================== -->

</body>

</html>