import './bootstrap';
import { countries } from './countries';

document.addEventListener('DOMContentLoaded', () => {
  const select = document.getElementById("countrySelect");
  if (!select) return;

  countries
    .sort((a, b) => a.name.localeCompare(b.name))
    .forEach(country => {
        const option = document.createElement("option");
        option.textContent = `${country.name}`;
        select.appendChild(option);
    });
});