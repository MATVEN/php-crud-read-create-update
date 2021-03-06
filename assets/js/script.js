function printData(data) {

  var target = $('#container')

  var source = $("#hb-template").html();
  var sourceTransfert = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++) {

    var configuration = data[i];

    var compiledConfiguration = sourceTransfert(configuration);

    target.append(compiledConfiguration);

  }
};

function getData() {

    $.ajax({
      url: "assets/php/getAllConfiguration.php",
      method: "GET",
      success: function(data) {

          printData(data);

      },
      error: function(error) {
        console.log("error", error);
      }
    });
  }

  function newConfiguration() {

    var me = $(this);

    $.ajax({

        url: "assets/php/newConfiguration.php",
        method: "POST",
        data: me.serialize(),
        success: function (data) {

            if (data) {

                getData(data);
            }
        },
        error: function (error) {

            console.log("error", error);
        }
    });

    return false;
}

function updateConfiguration() {

    var me = $(this);

    $.ajax({

        url: "assets/php/updateConfigurazione.php",
        method: "POST",
        data: me.serialize(),
        success: function (data) {
            if (data) {

                getData(data);
            }
        },
        error: function (error) {

            console.log("error", error);
        }
    });

    return false;
}

function deleteConfiguration() {

    var me = $(this);

    $.ajax({

        url: "assets/php/deleteConfigurazione.php",
        method: "POST",
        data: me.serialize(),
        success: function (data) {
            if (data) {

                getData(data);
            }
        },
        error: function (error) {

            console.log("error", error);
        }
    });

    return false;
}

$(document).ready(function () {
    getData();
    $("#add-form").submit(newConfiguration);
    $("#mod-form").submit(updateConfiguration);
    $("#del-form").submit(deleteConfiguration);
});
