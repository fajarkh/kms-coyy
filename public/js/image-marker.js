import * as markerjs2 from 'markerjs2';
function showMarkerArea(target) {
    let $div = $(target).closest('div');
    let sourceImage = $('.markerSource');

    const markerArea = new markerjs2.MarkerArea(target);
    markerArea.availableMarkerTypes = ['FreehandMarker'];
    markerArea.targetRoot = target.closest('div');

    markerArea.addRenderEventListener((imgURL, state) => {
        target.src = imgURL;
        mState = state;
        $div.find('input:hidden').val(JSON.stringify(mState));
    });
    // markerArea.addEventListener("render", (event) => {
    //     target.src = event.dataUrl;
    //     mState = event.state;
    //     $div.find('input:hidden').val(JSON.stringify(mState));
    // });

    markerArea.show();
    let lastState = $div.find('input:hidden').val();
    if (lastState !== '') {
        markerArea.restoreState(JSON.parse(lastState));
    }
}
