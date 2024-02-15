const body = document.querySelector("body"),
  sidebar = body.querySelector(".sidebar"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text"),
  toggleThemeButton = document.getElementById("toggleThemeButton");


function setTheme(theme) {
  body.classList.toggle("dark", theme === "dark");
  modeText.innerText = theme === "dark" ? "Light Mode" : "Dark Mode";
}

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

modeSwitch.addEventListener("click", () => {
  const currentTheme = body.classList.contains("dark") ? "light" : "dark";

  if (body.classList.contains("dark")) {
    body.classList.remove("dark");
  } else {
    body.classList.add("dark");
  }

  localStorage.setItem("theme", currentTheme);
});

toggleThemeButton.addEventListener("click", () => {
  const currentTheme = body.classList.contains("dark") ? "light" : "dark";
  setTheme(currentTheme);
  localStorage.setItem("theme", currentTheme);
});

const storedTheme = localStorage.getItem("theme");

if (storedTheme) {
  setTheme(storedTheme);
} else {
  const userPrefersDark = window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches;
  setTheme(userPrefersDark ? "dark" : "light");
}
