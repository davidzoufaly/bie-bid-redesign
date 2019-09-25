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

countrySelect.addEventListener(
  "change",
  showRegionSelect(countrySelect, countriesWithRegion, regionWrapper)
);
