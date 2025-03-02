document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('section');

    const options = {
        root: null, // menggunakan viewport sebagai root
        threshold: 0. // threshold untuk 10% dari section terlihat
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in'); // Tambahkan kelas fade-in
                entry.target.classList.remove('fade-out'); // Hapus kelas fade-out
            } else {
                entry.target.classList.remove('fade-in'); // Hapus kelas fade-in
                entry.target.classList.add('fade-out'); // Tambahkan kelas fade-out
            }
        });
    }, options);

    sections.forEach(section => {
        observer.observe(section); // Mulai mengamati setiap section
    });
});
