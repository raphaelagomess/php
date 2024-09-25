i =totalEconomizado = 0
meta = 1000
depositoMensal = 200
i =meses= 0

while (totalEconomizado < meta) {
    totalEconomizado += depositoMensal; 
    meses++;
    console.log(`Mês ${meses}: R$ ${totalEconomizado.toFixed(2)} economizado`);
}

console.log(`Você alcançou R$ ${meta} em ${meses} meses.`);
