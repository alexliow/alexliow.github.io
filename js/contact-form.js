//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

$(function() {
    $('form').submit(function() {
    	var formData = {
            'name'              : $('input[name=name]').val(),
            'email'             : $('input[name=reply_to]').val(),
            'message'    		: $('textarea[name=message]').val()
        };

        var promise = $.ajax({
            type: 'POST',
            url: 'http://formspree.io/liow.alex@gmail.com',
            data: formData,
            enc: true,
            error: function(xhr,status,error) {
           		// error code here
           		console.log("error");
           		sweetAlert("Oops...", "Something went wrong!", "error");	
        	},
        	succcess: function(xhr,status) {
	           	// completion code here
	           	console.log("success");
	           	return promise;
	           	swal("Good job!", "You clicked the button!", "success");
        	}
        }).success(function(){console.log("first always");swal("Good job!", "You clicked the button!", "success");});
         return false;
        promise.always(function() {console.log("second always");swal("Good job!", "You clicked the button!", "success");});
    });
})

app.get('/posts', function(req, res){
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "X-Requested-With"); 
				
