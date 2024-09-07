function toggleStatus(taskId, checkbox) {
    const status = checkbox.checked ? 1 : 0;
    fetch(`toggle_status.php?id=${taskId}&status=${status}`, {
        method: 'GET'
    })
    .then(response => response.text())
    .then(data => {
        if (data === 'success') {
            console.log('Status updated successfully.');
        } else {
            console.error('Failed to update status.');
        }
    });
}
