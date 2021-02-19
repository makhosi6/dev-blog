const title = document.querySelector('[name="title"]');
const subTitle = document.querySelector('[name="sub-title"]');
//
const titleOutput = document.querySelector("span.title-output");
const subOutput = document.querySelector("span.sub-output");
const titleTotal = document.querySelector("span.title-total");
const subTotal = document.querySelector("span.sub-total");

function updater(element, output, total) {
  element.addEventListener("input", (event) => {
    output.innerText = element.value.length;
    console.log(Number(total.innerText) < element.value.length);
    console.log(Number(total.innerText),  element.value.length);
    if (Number(total.innerText) < element.value.length) {
      output.parentElement.style.color = "red";
    }
    if (Number(total.innerText) > element.value.length) {
      output.parentElement.style.color = "#353535";
    }
  });
}

  updater(title, titleOutput, titleTotal);
  updater(subTitle, subOutput, subTotal);
