$(function () {
    calc();
});

function calc() {
    var inv_amnt_error = false;
    var inv_plan_error = false;
    var amount = parseFloat($('#calc_amount').val());
    var days = parseFloat($('#inv_days').val());
    var percent = 1, daily_profit = 0, weekly_profit = 0, total_profit = 0, total_return = 0, min_amount = 0, max_amount = 0,
        result = 0, selected_plan='';

         if (amount >= 20 && amount <= 4999) {
                percent = 1;
                selected_plan = 'Investment in Solar Panels';
            }
            else if (amount >= 5000  && amount <= 9999) {
                percent = 2;
                selected_plan = 'Investment in Wind Mills';
            }
            else if (amount >= 10000 && amount <= 9999999) {
                percent = 3;
                selected_plan = 'Investment in Hydro Turbines';
            }
            else {
                inv_plan_error = true;
            }


    if (inv_amnt_error || inv_plan_error || !days) {
        $('#selected_plan').html("<span style='color:#c32e01;'>--</span>");
        $('#inv_rate').html("<span style='color:#c32e01;'>--</span>");
        $('#daily_profit').html("<span style='color:#c32e01;'>N/A</span>");
        $('#weekly_profit').html("<span style='color:#c32e01;'>N/A</span>");
        $('#total_profit').html("<span style='color:#c32e01;'>N/A</span>");
        $('#total_return').html("<span style='color:#c32e01;'>N/A</span>");
    }
    else {

        daily_profit = amount * percent / 100;

        weekly_profit = daily_profit * 7;

        total_return = daily_profit * days;

        if(total_return > amount) {

        total_profit = total_return - amount;
    }

        $('#selected_plan').text(selected_plan);
        $('#inv_rate').text(percent+'%');
        $('#daily_profit').text('$' + daily_profit.toFixedDown(2));
        $('#weekly_profit').text('$' + weekly_profit.toFixedDown(2));
        $('#total_profit').text('$' + total_profit.toFixedDown(2));
        $('#total_return').text('$' + total_return.toFixedDown(2));
    }

}

Number.prototype.toFixedDown = function (digits) {
    var re = new RegExp("(\\d+\\.\\d{" + digits + "})(\\d)"),
        m = this.toString().match(re);
    return m ? parseFloat(m[1]) : this.valueOf();
};