/* REGIONY PRO VYBRANÉ ZEMĚ */

const countrySelect = document.querySelector("#countries");
const regionWrapper = document.querySelector(".region-wrapper");

const countriesWithRegion = [
  {
    countryName: "Czech Republic",
    countryID: "cz"
  },
  {
    countryName: "Slovakia",
    countryID: "sk"
  },
  {
    countryName: "Croatia",
    countryID: "hr"
  },
  {
    countryName: "Latvia",
    countryID: "lv"
  },
  {
    countryName: "Estonia",
    countryID: "est"
  },
  {
    countryName: "Slovenia",
    countryID: "slo"
  },
  {
    countryName: "Lithuania",
    countryID: "lt"
  },
  {
    countryName: "Greece",
    countryID: "gre"
  }
];

let showRegionSelect = (selectedCountry, countriesWithRegion, wrapper) => {
  return () => {
    // výchozí bod, všechny selecty skryté
    if (document.querySelector(`.region.show`)) {
      document.querySelector(`.region.show`).classList.remove("show");
    }
    // filtruj array
    let ourCountry = countriesWithRegion.filter(
      country => country.countryName === selectedCountry.value
    );
    // pokud si našel aspoň jeden záznam
    if (ourCountry.length > 0) {
      wrapper.style.display = "block";
      document
        .querySelector(`.region--${ourCountry[0].countryID}`)
        .classList.add("show");
    } else {
      wrapper.style.display = "none";
    }
  };
};

if (countrySelect) {
  countrySelect.addEventListener(
    "change",
    showRegionSelect(countrySelect, countriesWithRegion, regionWrapper)
  );
}

/* TELEFON VALIDITA */
const inputTel = document.querySelector("#reg-tel-number");
const outputTel = document.querySelector("#reg-telephone");

function telValidnost(input, output) {
  return () => {
    if(document.querySelector('#phone-valid')) {document.querySelector('#phone-valid').remove()};
    let test = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/.test(input.value);
    if (test) {
      let phoneNumber = input.value;
      phoneNumber.replace(/\s/g, "")
      let firstChar = phoneNumber.substr(0, 1);
      output.value = firstChar !== "+" ? `+${phoneNumber}` : phoneNumber;
    } else {
      input.insertAdjacentHTML('afterend', '<span class="wpcf7-not-valid-tip" id="phone-valid">Invalid phone number syntax.</span>')
    }
  };
}

inputTel.addEventListener("keyup", telValidnost(inputTel, outputTel));
