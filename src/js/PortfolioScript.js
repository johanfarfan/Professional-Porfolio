$(document).ready(function(){
    $('#Semester-info-f17').hide();
    $('#Semester-info-s18').hide();
    $('#Semester-info-f18').hide();
    $('#Semester-info-s19').hide();
    $('#Semester-info-sm19').hide();
    $('#Semester-info-f19').hide();
    var showingF17 = true;
    var showingS18 = true;
    var showingF18 = true;
    var showingS19 = true;
    var showingSm19 = true;
    var showingF19 = true;

    $('#toggler-f17').click(function(){
        $('#Semester-info-f17').slideToggle('slow');
            if (showingF17 == false){
                $('#toggler-f17').html('Collapse <span class="text-success"><strong>+</strong></span>');
                showingF17 = true;
            }else{
                $('#toggler-f17').html('Hide <span class="text-danger"><strong>-</strong></span>');
                showingF17 = false;
            }
    });
    $('#toggler-s18').click(function(){
        $('#Semester-info-s18').slideToggle('slow');
            if (showingS18 == false){
                $('#toggler-s18').html('Collapse <span class="text-success"><strong>+</strong></span>');
                showingS18 = true;
            }else{
                $('#toggler-s18').html('Hide <span class="text-danger"><strong>-</strong></span>');
                showingS18 = false;
            }
    });
    $('#toggler-f18').click(function(){
        $('#Semester-info-f18').slideToggle('slow');
            if (showingF18 == false){
                $('#toggler-f18').html('Collapse <span class="text-success"><strong>+</strong></span>');
                showingF18 = true;
            }else{
                $('#toggler-f18').html('Hide <span class="text-danger"><strong>-</strong></span>');
                showingF18 = false;
            }
    });
    $('#toggler-s19').click(function(){
        $('#Semester-info-s19').slideToggle('slow');
            if (showingS19 == false){
                $('#toggler-s19').html('Collapse <span class="text-success"><strong>+</strong></span>');
                showingS19 = true;
            }else{
                $('#toggler-s19').html('Hide <span class="text-danger"><strong>-</strong></span>');
                showingS19 = false;
            }
    });
    $('#toggler-sm19').click(function(){
        $('#Semester-info-sm19').slideToggle('slow');
            if (showingSm19 == false){
                $('#toggler-sm19').html('Collapse <span class="text-success"><strong>+</strong></span>');
                showingSm19 = true;
            }else{
                $('#toggler-sm19').html('Hide <span class="text-danger"><strong>-</strong></span>');
                showingSm19 = false;
            }
    });
    $('#toggler-f19').click(function(){
        $('#Semester-info-f19').slideToggle('slow');
            if (showingF19 == false){
                $('#toggler-f19').html('Collapse <span class="text-success"><strong>+</strong></span>');
                showingF19 = true;
            }else{
                $('#toggler-f19').html('Hide <span class="text-danger"><strong>-</strong></span>');
                showingF19 = false;
            }
    });
});