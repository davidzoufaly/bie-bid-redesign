const alphabet = [
  "A",
  "B",
  "C",
  "D",
  "E",
  "F",
  "G",
  "H",
  "I",
  "J",
  "K",
  "L",
  "M",
  "N",
  "P",
  "Q",
  "R",
  "S",
  "T",
  "U",
  "V",
  "W",
  "X",
  "Y",
  "Z"
];
const number = ["1", "2", "3", "4", "5", "6", "7", "8", "9"];

const generateRandomId = (a, b) => {
  let schoolId = [];
  const delkaId = 8;

  const inner = () => {
    while (schoolId.length < delkaId) {
      if (Math.floor(Math.random() * 2) > 0) {
        // push letter
        schoolId.push(a[Math.floor(Math.random() * a.length)]);
      } else {
        // push number
        schoolId.push(b[Math.floor(Math.random() * b.length)]);
      }
    }
    return schoolId;
  };
  return inner();
};

// propis do inputu
const schoolIDInput = document.querySelector("#school-id");
const regDate = document.querySelector("#reg-date");

let today = new Date();
let date = `${today.getDate()}.${(today.getMonth()+1)}.${today.getFullYear()}`;

let hours = () => {return today.getHours() < 10 ? `0${today.getHours()}` : today.getHours();
}

let minutes = () => {return today.getMinutes() < 10 ? `0${today.getMinutes()}` : today.getMinutes();
}


let time = `${hours()}:${minutes()}`;
let dateTime = `${date} ${time}`;

if (schoolIDInput) {
  document.querySelector(
    "#register-submit"
  ).addEventListener('click', () => {
    schoolIDInput.value = generateRandomId(alphabet, number).join("");
    regDate.value = dateTime;
  });
}
