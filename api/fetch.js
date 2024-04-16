function livedata() {
    var parameters = ['cod', 'bod', 'tss', 'ph', 'one', 'two'];
    
    parameters.forEach(function(parameter) {
        $.getJSON('api/api.php?id=' + encodeURIComponent(parameter), function(data) {
            receiveddata = data[0];

            if (receiveddata == undefined) {
                // Handle the case when data is undefined
            } else {
                var value = receiveddata[parameter];
                var timeReceived = receiveddata.time_received;

                $('#' + parameter).html(value);
                $('#' + parameter + '_time_received').html(timeReceived);
            }
        });
    });
}

function fm1() {
   
        $.getJSON('api/api.php?id=one' , function(data) {
            receiveddata = data[0];

            if (receiveddata == undefined) {
                // Handle the case when data is undefined
            } else {
    
                flow1 = receiveddata.flow;
                tot1 = receiveddata.flow;

                $('#flow1').html(flow1);
                $('#tot1').html(tot1);
            }
        });
  
}
function fm2() {
   
    $.getJSON('api/api.php?id=two' , function(datatwo) {
        receiveddata = datatwo[0];

        if (receiveddata == undefined) {
            // Handle the case when data is undefined
        } else {

            flow2 = receiveddata.flow;
            tot2 = receiveddata.flow;

            $('#flow2').html(flow2);
            $('#tot2').html(tot2);
        }
    });

}