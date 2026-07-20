document.addEventListener('DOMContentLoaded', () => {
    // 1. Interactive Lyric Line Highlighting
    const lyricLines = document.querySelectorAll('.lyric-line');
    lyricLines.forEach((line) => {
        line.addEventListener('click', () => {
            lyricLines.forEach(l => l.classList.remove('active-line'));
            line.classList.add('active-line');
        });
    });

    // 2. Lyrics Search & Highlight
    const searchInput = document.getElementById('lyric-search');
    const matchCounter = document.getElementById('match-counter');

    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase().trim();
            let matches = 0;

            lyricLines.forEach((line) => {
                const text = line.textContent.toLowerCase();
                if (query.length > 0 && text.includes(query)) {
                    line.classList.add('highlight-search');
                    matches++;
                } else {
                    line.classList.remove('highlight-search');
                }
            });

            if (matchCounter) {
                if (query.length > 0) {
                    matchCounter.textContent = `${matches} match${matches === 1 ? '' : 'es'}`;
                    matchCounter.classList.remove('hidden');
                } else {
                    matchCounter.classList.add('hidden');
                }
            }
        });
    }

    // 3. Font Size Controls
    const lyricsContainer = document.getElementById('lyrics-container');
    const btnFontSizeUp = document.getElementById('btn-font-up');
    const btnFontSizeDown = document.getElementById('btn-font-down');
    const btnFontSizeReset = document.getElementById('btn-font-reset');

    let currentFontSize = 1.125;

    if (lyricsContainer) {
        if (btnFontSizeUp) {
            btnFontSizeUp.addEventListener('click', () => {
                if (currentFontSize < 2.0) {
                    currentFontSize += 0.125;
                    lyricsContainer.style.fontSize = `${currentFontSize}rem`;
                }
            });
        }
        if (btnFontSizeDown) {
            btnFontSizeDown.addEventListener('click', () => {
                if (currentFontSize > 0.875) {
                    currentFontSize -= 0.125;
                    lyricsContainer.style.fontSize = `${currentFontSize}rem`;
                }
            });
        }
        if (btnFontSizeReset) {
            btnFontSizeReset.addEventListener('click', () => {
                currentFontSize = 1.125;
                lyricsContainer.style.fontSize = '1.125rem';
            });
        }
    }

    // 4. Spotify Player Size Toggle
    const spotifyIframe = document.getElementById('spotify-player');
    const toggleBtn = document.getElementById('btn-toggle-player-size');

    if (spotifyIframe && toggleBtn) {
        let isExpanded = true;
        toggleBtn.addEventListener('click', () => {
            isExpanded = !isExpanded;
            if (isExpanded) {
                spotifyIframe.style.height = '352px';
                toggleBtn.innerHTML = `
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg> Compact Mode
                `;
            } else {
                spotifyIframe.style.height = '152px';
                toggleBtn.innerHTML = `
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg> Expand Player
                `;
            }
        });
    }

    // 5. Copy Lyrics to Clipboard with Toast Notification
    const btnCopyLyrics = document.getElementById('btn-copy-lyrics');
    const toast = document.getElementById('toast-notification');

    if (btnCopyLyrics) {
        btnCopyLyrics.addEventListener('click', () => {
            const lines = Array.from(lyricLines).map(l => l.textContent.trim());
            const fullLyricsText = lines.join('\n');

            navigator.clipboard.writeText(fullLyricsText).then(() => {
                showToast('Lyrics copied to clipboard!');
            }).catch(() => {
                showToast('Failed to copy lyrics', true);
            });
        });
    }

    function showToast(message, isError = false) {
        if (!toast) return;
        toast.textContent = message;
        toast.className = `fixed bottom-6 right-6 px-5 py-3 rounded-xl shadow-2xl transition-all duration-300 transform translate-y-0 opacity-100 z-50 text-sm font-medium flex items-center gap-2 ${
            isError ? 'bg-red-500 text-white' : 'bg-gradient-to-r from-cyan-500 to-blue-600 text-white glow-box-cyan'
        }`;

        setTimeout(() => {
            toast.className = 'fixed bottom-6 right-6 px-5 py-3 rounded-xl transition-all duration-300 transform translate-y-10 opacity-0 pointer-events-none z-50';
        }, 3000);
    }

    // 6. Auto-Scroll / Karaoke Mode
    const btnAutoScroll = document.getElementById('btn-auto-scroll');
    let autoScrollInterval = null;
    let isAutoScrolling = false;

    if (btnAutoScroll && lyricsContainer) {
        btnAutoScroll.addEventListener('click', () => {
            isAutoScrolling = !isAutoScrolling;
            if (isAutoScrolling) {
                btnAutoScroll.classList.add('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300');
                btnAutoScroll.innerHTML = `
                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span> Scrolling...
                `;
                autoScrollInterval = setInterval(() => {
                    const lyricBox = document.getElementById('lyrics-scroll-box');
                    if (lyricBox) {
                        lyricBox.scrollTop += 1;
                        if (lyricBox.scrollTop + lyricBox.clientHeight >= lyricBox.scrollHeight - 5) {
                            clearInterval(autoScrollInterval);
                            isAutoScrolling = false;
                            resetAutoScrollBtn();
                        }
                    }
                }, 50);
            } else {
                clearInterval(autoScrollInterval);
                resetAutoScrollBtn();
            }
        });
    }

    function resetAutoScrollBtn() {
        if (!btnAutoScroll) return;
        btnAutoScroll.classList.remove('bg-cyan-500/20', 'border-cyan-400', 'text-cyan-300');
        btnAutoScroll.innerHTML = `
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7-7-7m14-8l-7 7-7-7"/>
            </svg> Auto Scroll
        `;
    }
});
