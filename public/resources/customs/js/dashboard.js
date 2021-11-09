$(document).ready(function() {


    $.ajax({
        url: base_url + '/dashboard-ticketperdept' ,
        type: 'GET',
        cache: false,
        success: function (data) {

            var dataObj = JSON.parse(data);
            var count = {};
            var source = [];

            dataObj.forEach(function(e) {
                source.push(e.Department);
                count[e.Department] = e.Total;
            })

            var colors = [
                "#bdf767",
                "#6ab2b7",
                "#5c46bf"
            ];

            c3.generate({
                bindto: '#ticket_pie',
                data: {
                    json: [ count ],
                    keys: { value: source },
                    type: 'pie'
                },
                color: {
                    pattern: colors
                },
                pie: {
                    label: {
                        show: true,

                    }
                },
                legend: {
                    show: true,
                    position: 'inset',
                    inset: {
                        anchor: 'top-left',
                        x: -50,
                        y: 0,
                        step: 0
                    }
                },
                tooltip: {
                    format: {
                      value: function (value, ratio, id, index) { return value; }
                    }
                  }
            });
        },
        error: function () {
            console.log('error');
        }
    });


 })
