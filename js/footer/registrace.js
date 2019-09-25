const countrySelect = document.querySelector("#countries");
const regionWrapper = document.querySelector(".region-wrapper");
const regions = document.querySelectorAll(".region");

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

let showRegionSelect = (
  selectedCountry,
  countriesWithRegion,
  wrapper,
  regions
) => {
  return () => {
    countriesWithRegion.filter(country => {
      if (country.countryName === selectedCountry.value) {
        wrapper.style.display = "block";
        Array.from(regions).filter(region => {
          if (region.classList.value.includes(`region--${country.countryID}`)) {
            region.style.display = "block";
          } else {
              region.style.display = "none";
          }
        });
      }
    });
  };
};

countrySelect.addEventListener(
  "change",
  showRegionSelect(countrySelect, countriesWithRegion, regionWrapper, regions)
);
