document.querySelectorAll('.scrollable-content').forEach(content => {
    let isDragging = false;
    let initialX, initialY, initialScrollX, initialScrollY;

    content.addEventListener('mousedown', (e) => {
      isDragging = true;
      initialX = e.clientX;
      initialY = e.clientY;
      initialScrollX = content.scrollLeft;
      initialScrollY = content.scrollTop;

      document.addEventListener('mousemove', onMouseMove);
      document.addEventListener('mouseup', onMouseUp);
    });

    function onMouseMove(e) {
      if (isDragging) {
        const deltaX = e.clientX - initialX;
        const deltaY = e.clientY - initialY;
        content.scrollLeft = initialScrollX - deltaX;
        content.scrollTop = initialScrollY - deltaY;
      }
    }

    function onMouseUp() {
      isDragging = false;
      document.removeEventListener('mousemove', onMouseMove);
      document.removeEventListener('mouseup', onMouseUp);
    }
  });

 
  
