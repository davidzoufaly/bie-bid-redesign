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
        // write letter
        schoolId.push(a[Math.floor(Math.random() * a.length)]);
      } else {
        // write number
        schoolId.push(b[Math.floor(Math.random() * b.length)]);
      }
    }
    return schoolId;
  };
  return inner();
};

const finalID = generateRandomId(alphabet, number).join("");

schoolIDInput = document.querySelector('#school-id') ;

if (schoolIDInput) {
    schoolIDInput.value = finalID;
}
