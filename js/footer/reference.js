//? HANDLING LONG TESTIMONIALS TEXT
var isTestimonial =
  document.getElementsByClassName("ref-box__ref-text").length > 0
    ? true
    : false;

if (isTestimonial) {
  var showFullText = function showFullText(id) {
    fullTexty.filter(function(e) {
      if (e.id === id) {
        document.getElementById("".concat(id)).innerHTML = e.text;
        document.getElementById("button-".concat(id)).style.display = "none";
      }
    });
  };

  var fullTexty = [];
  var requiredLength = 200;
  Array.from(document.getElementsByClassName("ref-box__ref-text"))
    .filter(function(e) {
      return e.textContent.length > requiredLength;
    })
    .forEach(function(e) {
      fullTexty.push({
        text: e.innerHTML,
        id: e.id
      });
      e.insertAdjacentHTML(
        "afterend",
        '<button class="btn btn--link" id="button-'
          .concat(e.id, '" onClick="showFullText(\'')
          .concat(e.id, "')\">Full text</button>")
      );
      e.innerHTML = e.innerHTML.substring(0, requiredLength) + "...";
    });
}