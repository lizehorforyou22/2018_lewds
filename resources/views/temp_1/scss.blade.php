
<script type="text/javascript">
  $(document).ready(function() {
    $("#language_change").change(function(){
      var language=$(this).val();
      $("#language_label").html("Loading Language...");
      $.ajax({
        url: 'http://lms.xeroneit.net/home/language_changer',
        type: 'POST',
        data: {language:language},
        success:function(response){
            $("#language_label").html("Language");
            location.reload(); 
        }
      })
      
    });
  });
</script>


<script>
  $(function(){
    $('.carousel').carousel({
      interval: 5000
    });
 });
</script><br/>
<style type="text/css">
  
/*
Bestsellers Badge
*/

.yith-wcbsl-badge-wrapper {
position : absolute;
top : -20px;
left : 20;
width : 120px;
height : 120px;
overflow : hidden;
}

.green {
  background : #50974F !important;
  color: white !important;
}
.yith-wcbsl-badge-content {
font-family : "Open Sans", Helvetica, sans-serif;
font-size : 16px;
height : 40px;
width : 200px;
background : #a00000;
color : #fff;
-webkit-transform : rotate(-45deg);
-ms-transform : rotate(-45deg);
transform : rotate(-45deg);
text-align : center;
line-height : 40px;
position : absolute;
/*top : 20px;*/
left : -60px;
box-shadow : 0px 1px 4px 0 rgba(0, 0, 0, 0.3);
font-weight : 800;
}

.yith-wcbsl-badge-wrapper.yith-wcbsl-mini-badge {
width : 80px;
height : 80px;
}

.yith-wcbsl-badge-wrapper.yith-wcbsl-mini-badge .yith-wcbsl-badge-content {
font-size : 12px;
height : 30px;
width : 130px;
line-height : 30px;
top : 13px;
left : -36px;
}
</style>