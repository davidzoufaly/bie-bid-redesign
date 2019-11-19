// global invoice var filled by saved data repsonse
let invoice_number;

// form selectors
const schoolId = document.querySelector("#school-id");
const schoolVat = document.querySelector("#school-vat");
const schoolName = document.querySelector("#school-name");
const schoolStreet = document.querySelector("#school-street");
const schoolCity = document.querySelector("#school-city");
const schoolCode = document.querySelector("#school-code");
const schoolCountry = document.querySelector("#country");
const paymentCurrency = document.querySelector("#payment-currency");

let dataState;

async function saveData() {
  if (
    schoolId.value &&
    schoolVat.value &&
    schoolName.value &&
    schoolStreet.value &&
    schoolCity.value &&
    schoolCode.value &&
    schoolCountry.value &&
    paymentCurrency.value
  ) {
    document.querySelector(".invoice-form__fieldset--payment").style.display =
      "block";
    document.querySelector(
      ".invoice-form__fieldset--school-info"
    ).style.display = "none";
    document.querySelector("H1").scrollIntoView();

    const formData = {
      school_id: schoolId.value,
      school_vat: schoolVat.value,
      school_name: schoolName.value,
      school_street: schoolStreet.value,
      school_city: schoolCity.value,
      school_code: schoolCode.value,
      school_country_code: schoolCountry.value,
      school_country: schoolCountry.options[schoolCountry.selectedIndex].text,
      payment_currency: paymentCurrency.value
    };

    if (JSON.stringify(formData) !== JSON.stringify(dataState)) {
      dataState = formData;

      const res = await fetch(`${templateUrl}/scripts/pb/save.php`, {
        method: "POST",
        body: JSON.stringify(formData),
        headers: {
          "Content-Type": "application/json"
        }
      });
      const data = await res.json();
      invoice_number = await data.invoiceNumber;
      const err = await data.error;
      console.log(err);

      document.querySelector(
        "#invoice_number"
      ).value = await data.invoiceNumber;
    }
  } else {
    document.querySelector("#ctx--not-filled").textContent =
      "Fill all inputs please.";
  }
}

const goBack = () => {
  document.querySelector(".invoice-form__fieldset--payment").style.display =
    "none";
  document.querySelector(".invoice-form__fieldset--school-info").style.display =
    "block";
};

const generateInvoice = () => {
  //redirect to invoice script
  window.open(
    `${templateUrl}/scripts/pb/invoice.php?invoice_number=${invoice_number}`,
    "_blank"
  );
  // hide button and amount and pay now
  document.querySelector(".invoice-form__generate-invoice").style.display =
    "none";
  document.querySelector("#amount-hook").style.display = "none";
  document.querySelector(".invoice-form__pay-now").style.display = "none";
  // show thank you message
  window.location.pathname = "/";
};

// PAY NOW OR LATER -> FORM
const country = document.querySelector("#country");
const radioYes = document.querySelector("#pay-now-yes");
const radioNo = document.querySelector("#pay-now-no");

country.addEventListener("change", event => {
  document.querySelector(".invoice-form__payment-method").style.display =
    "none";
  document.querySelector(".bank-select").removeAttribute("required", "");
  document.querySelector(".bank-select").selectedIndex = 0;
  document.getElementsByName("pay-now").forEach(e => (e.checked = false));
  document.querySelector(".invoice-form__submit").style.display = "none";
  document.querySelector(".invoice-form__pay-now").style.display = "block";
  document.querySelector("#amount-hook").textContent = `Total value: ${
    event.target.value === "CZ" ? "900CZK" : "35EUR"
  }`;
  document.querySelector("#payment-currency").value =
    event.target.value === "CZ" ? "CZK" : "EUR";

  if (schoolCountry.value === "CZ") {
    Array.from(document.querySelectorAll(".sk")).forEach(
      el => (el.style.display = "none")
    );
    Array.from(document.querySelectorAll(".cz")).forEach(
      el => (el.style.display = "block")
    );
  } else {
    Array.from(document.querySelectorAll(".sk")).forEach(
      el => (el.style.display = "block")
    );
    Array.from(document.querySelectorAll(".cz")).forEach(
      el => (el.style.display = "none")
    );
  }
});

radioYes
  ? radioYes.addEventListener("change", event => {
      if (event.target.checked) {
        document.querySelector(
          ".invoice-form__generate-invoice"
        ).style.display = "none";
        schoolCountry.value === "CZ" || schoolCountry.value === "SK"
          ? (document.querySelector(
              ".invoice-form__payment-method"
            ).style.display = "block")
          : (document.querySelector(".invoice-form__submit").style.display =
              "block");
      }
    })
  : null;

radioNo
  ? radioNo.addEventListener("change", event => {
      if (event.target.checked) {
        document
          .getElementsByName("pay-method")
          .forEach(e => (e.checked = false));
        document.querySelector(
          ".invoice-form__generate-invoice"
        ).style.display = "block";
        document.querySelector(".bank-select").removeAttribute("required", "");
        document.querySelector(".invoice-form__bank").style.display = "none";
        document.querySelector(".bank-select").selectedIndex = 0;
        document.querySelector(".invoice-form__payment-method").style.display =
          "none";
        document.querySelector(".invoice-form__submit").style.display = "none";
      }
    })
  : null;

// BANK METHOD
const radioCard = document.querySelector("#pay-method__credit-card");
const radioBank = document.querySelector("#pay-method__bank-transfer");
radioCard
  ? radioCard.addEventListener("change", event => {
      if (event.target.checked) {
        document.querySelector(".invoice-form__submit").style.display = "block";
        document.querySelector(".invoice-form__bank").style.display = "none";
        document.querySelector(".bank-select").removeAttribute("required", "");
      }
    })
  : null;

radioBank
  ? radioBank.addEventListener("change", event => {
      if (event.target.checked) {
        document.querySelector(".bank-select").setAttribute("required", "");
        document.querySelector(".invoice-form__bank").style.display = "block";
        document.querySelector(".invoice-form__submit").style.display = "block";
      }
    })
  : null;
