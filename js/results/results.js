//IDS:
// SLPLWGP1
// Q84UCBVK
// 4QQZMLVJ
// 5DRB61LG
// CVQHS88L

// všechny stringy v appce a jejich jazykové mutace
const stringObject = {
  en: {
    str1: "Your text is too long!",
    str2: "Characters left:",
    str3: "School Name:",
    str4: "Place World:",
    str5: "Place Country:",
    str6: "Place Region:",
    str7: "Place by school type:",
    str8: "WRONG ID",
    str9: "Name",
    str10: "Lastname Initials",
    str11: "Age",
    str12: "Points",
    str13: "Time End (minutes)"
  },
  cz: {
    str1: "Text je příliš dlouhý",
    str2: "Zbývá znaků:",
    str3: "Název školy:",
    str4: "Pozice ve světě:",
    str5: "Pozice v zemi:",
    str6: "Pozice v kraji:",
    str7: "Pozice podle typu školy:",
    str8: "ŠPATNÉ ID",
    str9: "Jméno",
    str10: "Iniciály příjmení",
    str11: "Věk",
    str12: "Body",
    str13: "Čas konce (minuty)"
  }
};

/* přirazení propisu stringů podle aktuálního jazyku webu */
const { en, cz } = stringObject;
const currentLang = document.documentElement.lang;
let appLang;

switch (currentLang) {
  case "cs-CZ":
    appLang = cz;
    break;
  case "en-US":
    appLang = en;
    break;
}
/* konec přirazení */

let jsonData;
let schoolsJsonData;

window.addEventListener("DOMContentLoaded", () => {
  fetch(schoolData)
    .then(response => response.text())
    .then(mySchools => {
      schoolsJsonData = mySchools
        .trim()
        .split("\n")
        .map(line => line.split("\t"))
        .reduce(function(skola, line) {
          skola["skola"] = skola["skola"] || [];
          skola["skola"].push({
            id: line[0],
            placeWorld: line[1],
            placeCountry: line[2],
            placeRegion: line[3],
            placeSchoolType: line[4],
            schoolName: line[5]
          });
          return skola;
        }, {});
    });

  fetch(studentsData)
    .then(function(response) {
      return response.text();
    })
    .then(function(myText) {
      jsonData = myText
        .trim()
        .split("\n")
        .map(line => line.split("\t"))
        .reduce((skoly, line) => {
          skoly["skola"] = skoly["skola"] || [];
          skoly["skola"].push({
            name: line[0],
            lastNameInitial: line[1],
            id: line[3],
            place: line[6],
            placeCountry: line[7],
            points: line[4],
            timeEnd: line[5],
            age: line[2]
          });
          return skoly;
        }, {});
      searching();
    });
});

function searching() {
  //test
  /* let searchingSchoolID = 'C75YHV47';
      hledej(searchingSchoolID); */

  let searchingSchoolID;
  let charCount;
  const idOptimalLength = 8;

  document.getElementById("input-id").addEventListener("input", () => {
    searchingSchoolID = document.getElementById("input-id").value;

    charCount = idOptimalLength - searchingSchoolID.length;

    charCount < 0
      ? (document.getElementById("output").innerHTML = appLang.str1)
      : (document.getElementById(
          "output"
        ).innerHTML = `${appLang.str2} ${charCount}`);

    //reset table on page
    while (wrapper.firstChild) {
      wrapper.removeChild(wrapper.firstChild);
    }

    if (searchingSchoolID.length === 8) {
      document.getElementById("output").style.backgroundColor = "#95c255";
      hledejStudenty(searchingSchoolID);
      hledejSkoly(searchingSchoolID);
    } else {
      //reset 
      document.getElementById("output").style.backgroundColor = "#de635a";
      document.getElementById("wrong-id").textContent = "";
      document.getElementById("wrong-id").style.display = "none";
      document.querySelector(".school-container").classList.add("hide");
      document.getElementById("school-wrapper").innerHTML = "";
    }
  });
}

function hledejSkoly(id) {
  let schoolById = schoolsJsonData.skola.filter(
    e => e.id.toLowerCase() === id.toLowerCase()
  );

  if (schoolById.length > 0) {
    let filteredSchoolResult = `<strong>${appLang.str3}</strong> ${schoolById[0].schoolName}
        <br> <strong>${appLang.str4}</strong> ${schoolById[0].placeWorld}
        <br> <strong>${appLang.str5}</strong> ${schoolById[0].placeCountry}
        <br> <strong>${appLang.str6}</strong> ${schoolById[0].placeRegion}
        <br> <strong>${appLang.str7}</strong> ${schoolById[0].placeSchoolType}`;
    document.getElementById("school-wrapper").innerHTML = filteredSchoolResult;
    document.querySelector(".school-container").classList.remove("hide");
  }
}

function hledejStudenty(id) {
  // najdi jestli matchuje s databazi
  let filtrovanaData = jsonData.skola.filter(
    skola => skola.id.toLowerCase() === id.toLowerCase()
  );

  if (filtrovanaData.length === 0) {
    document.getElementById("wrong-id").style.display = "block";
    document.getElementById("wrong-id").textContent = appLang.str8;
  } else {
    names = [];
    lastNameInitials = [];
    places = [];
    placeCountry = [];
    studentsPoints = [];
    studentsTimeEnds = [];
    age = [];
    headings = [
      appLang.str9,
      appLang.str10,
      appLang.str11,
      appLang.str4,
      appLang.str5,
      appLang.str12,
      appLang.str13
    ];

    promenne = [
      names,
      lastNameInitials,
      age,
      places,
      placeCountry,
      studentsPoints,
      studentsTimeEnds
    ];

    filtrovanaData.forEach(entry => {
      promenne[0].push(entry.name);
      promenne[1].push(entry.lastNameInitial);
      promenne[2].push(entry.age);
      promenne[3].push(entry.place);
      promenne[4].push(entry.placeCountry);
      promenne[5].push(entry.points);
      promenne[6].push(Math.round(entry.timeEnd / 60));
    });

    // naházej to do tabulky
    const tableContainer = document.createElement("DIV");
    const table = document.createElement("TABLE");
    const tableFirstRow = document.createElement("TR");

    document.getElementById("wrapper").appendChild(tableContainer);
    document.getElementById("wrapper").classList.remove("hide");
    tableContainer.appendChild(table);
    table.appendChild(tableFirstRow);
    if (filtrovanaData.length > 0) {
      for (j = 0; j < headings.length; j++) {
        const tableHeading = document.createElement("TH");
        tableFirstRow.appendChild(tableHeading);
        tableHeading.innerHTML = headings[j];
      }
    }

    for (var i = 0; i < filtrovanaData.length; i++) {
      const tableRow = document.createElement("TR");
      table.appendChild(tableRow);

      for (var o = 0; o < promenne.length; o++) {
        const tableData = document.createElement("TD");
        tableRow.appendChild(tableData);
        tableData.innerHTML = promenne[o][i];
      }
    }
  }
}
