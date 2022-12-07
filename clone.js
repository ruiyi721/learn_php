// 物件型別 傳址
let obj1 = {
    name: 'Dora',
    info: {
        age: 31,
        weight: 43
    }
};

// let obj2 = obj1;
// obj2.name = 'Sam'; // 互相影響
// obj2.info.age = 20; // 互相影響

// let obj2 = {};
// obj2.name = obj1.name;
// obj2.info = obj1.info; // 同樣地址指向同值
// obj2.name = 'sam'; // 沒有影響1
// obj2.info.age = 20; // 互相影響

let obj2 = obj1;
// 此方式完全不互相影響 obj2 已是完全不同址
obj2 = {
    name: 'sam',
    info: {
        age: 30,
        weight: 69
    }
};

console.log(obj1);
console.log(obj2);