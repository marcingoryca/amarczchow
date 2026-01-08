(function () {

    let sources = [
        /*"https://www.youtube.com/embed/g6rhLVOsFoU?si=qpDFzvg0YlisMn_k&amp;start=04",
        "https://www.youtube.com/embed/vXCbZJu8Qyk?si=P-1r388hRDAIQ7d_",
        "https://www.youtube.com/embed/pvAtaoxXhTY?si=Hj0IJyv96re_hVmd",
        "https://www.youtube.com/embed/FW3fCnuXYMA?si=NeruILTkO5dwqSBu",
        "https://www.youtube.com/embed/2TkxykYES6I?si=WIxgHzRebQRHys8V"*/
    ];

    const iframe = document.getElementById('videoplayer');

    const buttons = document.querySelectorAll('.video-btn');

    buttons.forEach(button =>
        {
            button.addEventListener("click", function() {
                const index = this.getAttribute('data-index');

                iframe.src = sources[index];
            });
        }
    );

    function setRandomVideo() {
        let randomIndex = Math.floor(Math.random() * sources.length);
        iframe.src = sources[randomIndex];
    }

    setRandomVideo();

    setInterval(setRandomVideo(), 1000 * 60 * 30);

})();