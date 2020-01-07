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

$(document).ready(function () {

  $.ajax({
    url: "getAllConfiguration.php",
    method: "GET",
    success: function(data) {

        printData(data);

    },
    error: function(error) {
      console.log("error", error);
    }
  });

})
