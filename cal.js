function f(event){
    var btn = event.target;
    if($(btn).prop('nodeName') !='INPUT'){
        return;
    }
    var num = $(btn).val();
    var formula = $('#screen').html();
    if(num == 'C'){
        $('#screen').html('');
    }else if(num == '='){
        var result = eval(formula);
        $('#screen').html(formula+'='+result);
    }else{
        formula += num;
        $('#screen').html(formula);
    }
}