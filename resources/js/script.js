const MODEL_URL = '/public/models';

(async () =>{
    await faceapi.loadSsdMobilenetv1Model(MODEL_URL)
    await faceapi.loadFaceLandmarkModel(MODEL_URL)
    await faceapi.loadRecognitionModel(MODEL_URL)
    await faceapi.loadFaceExpressionModel(MODEL_URL)

    const image = document.getElementById('image');
    const canvas = document.getElementById('canvas');

    let fullFaceDescriptions = await faceapi.detectAllFaces(image)
        .withFaceLandmarks()
        .withFaceDescriptors()
        .withFaceExpressions();

    console.log(fullFaceDescriptions);

})();