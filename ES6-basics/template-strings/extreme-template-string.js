'use strict';

const student = { name: 'James', follwerCount: 34 };

let tableHTML = 
    `<table class="table">
      <thead>
        <tr>
          <td>Name</td>
          <td>Followers</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>${student.name}</td>
          <td>${student.follwerCount}</td>
        </tr>
      </tbody>
    </table>`;
          
console.log(tableHTML);