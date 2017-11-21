
<?= $this->Html->script('jquery-3.1.1.min.js') ?>
<?= $this->Html->script('https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js')?>
<!--
<script>
$(document).ready(function () { 
    
            $("#csvBtn").click(function () {
                    if($( "#csvForm" ).valid()){
                        
                      if(!$("#csv_file").val()){

                         alert('choose a file');
                         return false;
                      }
                      
                       
                    if($("#csv_file").val().toLowerCase().lastIndexOf(".csv")==-1) 
                        {
                            alert("Please upload a file with .csv extension.");
                            return false;
                        }   
                }
        });
        
        $('#search').keyup(function(e) {
                var urllink = '<?php echo $this->Url->build(["controller" => "Applicants", "action" => "autoSuggestResult"]); ?>';
                var postdata = $('#autoSuggest').serialize();
//                alert(postdata);
                $.ajax({
                    url: urllink,
                    type: 'POST',
                    data: postdata,
                    success: function (data) {
                        var myjson = JSON.parse(data);
                        if (myjson.msgtype == 'fail') {
                            alert('hi');
                        } else if (myjson.msgtype == 'sucsess') {
                            alert('hello');
//                            window.location = '<?= $this->Url->build(["controller" => "Applicants", "action" => "autoSuggest"]); ?>';
                        }
                    },
                    error: function () {

                    }
                });

        });
        
}); -->
<script>
('#csvForm').validate({
        ignore: ":hidden",
        errorElement: 'span',
        errorClass: 'help-inline',
        highlight: function (element) {
            $(element).parent().addClass("error");
        },
        unhighlight: function (element) {
            $(element).parent().removeClass("error");
        },
        rules: {
            "username": {
                required: true,
                onlyWord:true
        
            },
            "password": {
                required: true,
//                onlyWord:true
        
            }
        },
        messages: {
            "password": {
                required: 'Please Enter Password !',
            }
        }
    });
    jQuery.validator.addMethod("onlyWord", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[a-zA-Z]$/.test( value );
}, 'NOT Allow.');

</script>
