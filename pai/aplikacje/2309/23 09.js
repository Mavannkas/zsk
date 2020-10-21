function Osoba(_imie,_nazwisko,_dataurodzin){
    this.imie=_imie;
    this.nazwisko=_nazwisko;
    this.dataurodzin=_dataurodzin;
}

let arrOs=[];
arrOs.push(new Osoba("Wiktor","Ludwiniak",new Date("09/03/2001")));
arrOs.push(new Osoba("Filip","Nowicki",new Date("07/28/2001")));
arrOs.push(new Osoba("Mateusz","Osiński",new Date("01/01/2001")));
arrOs.push(new Osoba("Wiktor","Duczek",new Date("02/02/2001")));
arrOs.push(new Osoba("Ola","Gronert",new Date("03/03/2001")));
                        
function search(_imie,arr){
    for(let i of arr)
    {
        if(i.imie==_imie){
            console.log(i)
        }
    }                       
}
function add(_osoba,arr){
    for(let i of arr)
    {
        if(i.imie==_osoba.imie && i.nazwisko==_osoba.nazwisko && i.dataurodzin.getTime()==_osoba.dataurodzin.getTime()){
            console.log(" już istnieje");
            return 1;
        }
    } 
    console.log("Dodano ")
    arr.push(_osoba);
}

search("Wiktor",arrOs)
add(new Osoba("Wiktor","Ludwiniak",new Date("09/03/2001")),arrOs)


function OsobatoString(){
    console.log(this.imie)
    let a=`${this.imie} ${this.nazwisko} ur.${1} `;
    return (a);
}
Osoba.prototype.toString=OsobatoString;

let os=arrOs[0];
console.log(os.toString())
console.log(os.hasOwnProperty('imie'));
console.log(String.prototype.isPrototypeOf(os));
console.log(Object.prototype.isPrototypeOf(os));


let obj1={}
Object.defineProperty(obj1,
    "legs1",{
        value: 2,
        writable: true,
        configurable:true,
        enumerable:true,
    },
    )

Object.defineProperty(obj1,
    "legs2",{
        value: 2,
        writable: true,
        configurable:true,
        enumerable:true,
    },
    )


    console.log(Object.keys(os));
    for (let i  = 0; i  < Object.keys(os).length; i ++) {
        console.log(Object.keys(os)[i]);
    }
    console.log(Object.keys(obj1));
    for (let i  = 0; i  < Object.keys(obj1).length; i ++) {
        console.log(Object.keys(obj1)[i]);
    }


    let worker={
        work: "copy-past",
        speak: function(){
            console.log(`My job is `, this.work);
        }
    }
    let worker2={
        work: "coding apps",
    }

    console.log(worker.speak());
    console.log(worker.speak.call(worker2));