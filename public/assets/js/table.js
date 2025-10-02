document.addEventListener("DOMContentLoaded", () => {
  const table = document.getElementById("dataTable").getElementsByTagName("tbody")[0];
  const rows = Array.from(table.getElementsByTagName("tr"));
  const searchInput = document.getElementById("tableSearch");
  const rowsPerPageSelect = document.getElementById("rowsPerPage");
  const pagination = document.getElementById("pagination");
  const tableInfo = document.getElementById("tableInfo");

  let filteredRows = [...rows];
  let currentPage = 1;
  let rowsPerPage = parseInt(rowsPerPageSelect.value);

  function renderTable() {
    table.innerHTML = "";

    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    const pageRows = filteredRows.slice(start, end);

    pageRows.forEach(row => table.appendChild(row));

    tableInfo.textContent = `Showing ${start + 1} to ${Math.min(end, filteredRows.length)} of ${filteredRows.length} entries`;

    renderPagination();
  }

  function renderPagination() {
    pagination.innerHTML = "";

    const pageCount = Math.ceil(filteredRows.length / rowsPerPage);

    for (let i = 1; i <= pageCount; i++) {
      const btn = document.createElement("button");
      btn.textContent = i;
      btn.className = `px-3 py-1 rounded ${i === currentPage ? "bg-blue-600 text-white" : "bg-gray-100 text-gray-700 hover:bg-gray-200"}`;
      btn.addEventListener("click", () => {
        currentPage = i;
        renderTable();
      });
      pagination.appendChild(btn);
    }
  }

  searchInput.addEventListener("input", () => {
    const term = searchInput.value.toLowerCase();
    filteredRows = rows.filter(row =>
      row.innerText.toLowerCase().includes(term)
    );
    currentPage = 1;
    renderTable();
  });

  rowsPerPageSelect.addEventListener("change", () => {
    rowsPerPage = parseInt(rowsPerPageSelect.value);
    currentPage = 1;
    renderTable();
  });

  renderTable();
});
