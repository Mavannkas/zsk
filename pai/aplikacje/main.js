//Wiktor Ludwiniak 4B 2
console.log("Zadanie 1");
let square1=function(a){return a*a};
console.log(`2*2=${square1(2)}`);
console.log(`3*3=${(()=>{return 3*3})()}`);
console.log("Zadanie 2");
let sumRange=function(...params){
    if(params.length%2!=0){
        console.log("Błędna liczba argumentow");
    }
    else{
        let temp=0;
        for(let i=0;i<params.length-2;i+=2){
            temp+=Math.sqrt(Math.pow(params[i]-params[i+2],2)+Math.pow(params[i+1]-params[i+3],2));
        }
        console.log(temp);
    }
    
};
sumRange(0,0,1,1,2,4,5,2,2,2);
console.log("Zadanie 3");
let printSquareEquation=(a,b,c,fun)=>console.log(fun(a,b,c));
let SquareEquation=(a,b,c)=>{
    let delta=b*b-4*a*c;
    if(delta>0){
        let qrDel=Math.sqrt(delta);
        let x1=(-b+qrDel)/(2*a);
        let x2=(-b-qrDel)/(2*a);
        return `x1=${x1} i x2=${x2}`;
    }
    else if(delta==0){
        let x=-b/(2*a);
        return `x=${x}`;
    }
    else{
        return "Brak pierwiastków";
    }
};
printSquareEquation(1,4,3,SquareEquation);
printSquareEquation(1,2,1,function(a,b,c){
    let delta=b*b-4*a*c;
    if(delta>0){
        let qrDel=Math.sqrt(delta);
        let x1=(-b+qrDel)/(2*a);
        let x2=(-b-qrDel)/(2*a);
        return `x1=${x1} i x2=${x2}`;
    }
    else if(delta==0){
        let x=-b/(2*a);
        return `x=${x}`;
    }
    else{
        return "Brak pierwiastków";
    }
});
printSquareEquation(1,1,50,(a,b,c)=>{
    let delta=b*b-4*a*c;
    if(delta>0){
        let qrDel=Math.sqrt(delta);
        let x1=(-b+qrDel)/(2*a);
        let x2=(-b-qrDel)/(2*a);
        return `x1=${x1} i x2=${x2}`;
    }
    else if(delta==0){
        let x=-b/(2*a);
        return `x=${x}`;
    }
    else{
        return "Brak pierwiastków";
    }
});
