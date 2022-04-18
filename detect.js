const classifier=knnClassifier.create()
const webcamElement=document.getElementById("webcam")
let net
async function app(){
    console.log("Loading mobilnet...")

    net = await mobilenet.load()
    console.log("Loaded model")
    const webcam =await tf.data.webcam(webcamElement)

const addExample=async(classId)=>{
    const img=await webcam.capture();

    const activation=net.infer(img,true)
    classifier.addExample(activation,classID)
    img.dispose()
}
document.getElementById("book"). addEventListener("click",()=>addExample(0));
document.getElementById("other"). addEventListener("click",()=>addExample(1));
while(true){
    if(classifier.getNUmClasses()>0){
        const img=await webcam.capture()
        const activation=net.infer(img,"conv_preds")
        const result=await classifier.predictClass(activation)
        const classes=['book','other']
        document.getElementById("console").innerText=`
        prediction: ${classes[result.label]}\n
        probability:${result.confidences[result.label]}
        
        `
        img.dispose()
    }
    await tf.nextFrame()
}
} 
app()