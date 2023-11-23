var selection = document.querySelector("#tabs") !== null;
if (selection) {
  setTimeout(function () {
    new Tabs({
      el: "#tabs",
      //   timer: 500
      timer: 4000
    });
  }, 1000);
}
