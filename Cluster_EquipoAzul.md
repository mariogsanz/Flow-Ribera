

IES Ribera del Tajo-Dpto. Informática y Comunicaciones

CFGS: Administración de sistemas informáticos en red

Módulo: Proyecto EquipoAzul

Curso: 2º ASIR

***EQUIPOAZUL***

***CURSO: 2022/23***





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

INDICE

[1.](#br3)[ ](#br3)[SERVIDOR](#br3)[ ](#br3)[EN](#br3)[ ](#br3)[CLUSTER..........................................................................................................2](#br3)

[2.](#br5)[ ](#br5)[COMPONENTES](#br5)[ ](#br5)[PRINCIPALES](#br5)[ ](#br5)[DEL](#br5)[ ](#br5)[CLUSTER](#br5)[ ](#br5)[......................................................................4](#br5)

[2.1.](#br5)[ ](#br5)[SERVIDOR...........................................................................................................................4](#br5)

[2.2.](#br8)[ ](#br8)[SWITCH](#br8)[ ](#br8)[...............................................................................................................................7](#br8)

[2.3.](#br10)[ ](#br10)[DISCO](#br10)[ ](#br10)[DURO.......................................................................................................................9](#br10)

[2.4.](#br12)[ ](#br12)[CABINA](#br12)[ ](#br12)[DE](#br12)[ ](#br12)[DISCOS..........................................................................................................11](#br12)

[2.5.](#br15)[ ](#br15)[CONFIGURACIÓN](#br15)[ ](#br15)[DE](#br15)[ ](#br15)[LOS](#br15)[ ](#br15)[DISCOS.................................................................................14](#br15)

[2.6.](#br16)[ ](#br16)[PRESUPUESTO.................................................................................................................15](#br16)

EquipoAzul

**1.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**1. SERVIDOR EN CLUSTER**

**¿Qué es un servidor en clúster?**

Un servidor en clúster, también conocido como clúster de servidores, se trata de la unión de varios

sistemas informáticos (servidores) que funcionan como si fueran uno solo.

Cuando hablamos de «unir» nos referimos a que comparten recursos de hardware y software,

funcionando, así como si fueran un solo sistema unificado. Esta unión de recursos se realiza con

diversos fines, aunque la razón más popularidad es ofrecer velocidad y por sobre todo alta

disponibilidad ante fallos.

En palabras claras, un clúster de servidores se puede definir como un grupo de equipos

informáticos que comparten recursos balanceados y están conectados a una red de alta

velocidad.

**Ventajas de los servidores en clúster**

**- Alta disponibilidad:** este es uno de los grandes beneficios de la tecnología de clustering, es

decir, ofrecer un mejor uptime de servidores gracias a que si falla uno, el resto tomará el trabajo

ofreciendo así una alta disponibilidad del servicio.

**- Alta velocidad de despacho:** se obtiene gracias al equilibrio de las cargas, haciendo que los

servidores que reciben las solicitudes de los clientes puedan despachar los datos de forma

inmediata, sin delays ni retrasos de ningún tipo.

**- Balanceo de carga:** se establecen diferentes métodos de [balanceo](https://www.infranetworking.com/balanceo-de-carga)[ ](https://www.infranetworking.com/balanceo-de-carga)[de](https://www.infranetworking.com/balanceo-de-carga)[ ](https://www.infranetworking.com/balanceo-de-carga)[carga,](https://www.infranetworking.com/balanceo-de-carga)[ ](https://www.infranetworking.com/balanceo-de-carga)haciendo que una

o varias peticiones se deriven a determinados hosts, mientras que otras irán destinadas a otro

grupo de servidores bajo el clúster. Esto hace que ningún [servidor](https://blog.infranetworking.com/que-es-un-servidor/)[ ](https://blog.infranetworking.com/que-es-un-servidor/)se vea saturado.

**- Escalabilidad:** la mayoría de los clúster de servidores soportan escalabilidad de forma

horizontal, permitiendo agregar más servidores de forma masiva según se necesite debido a una

posible creciente demanda de parte de los usuarios.

**- Resistencia ante ataques DDOS:** tener un clúster de servidores ofrece un beneficio adicional

de soportar mejor las cargas de sistema que se originan ante ataques DDOS masivos, donde se

suelen inundar los servidores con peticiones no deseadas. El uso de múltiples servidores puede

ayudar a resistir mejores diferentes tipos de ataque destinados a agotar los recursos de sistema o

red.

**Desventajas de un servidor en clúster**

**Altos costos:** esta es una de las principales desventajas que tiene trabajar con un clúster de

servidores, y es que el setup y puesta a punto de tecnologías como este tipo cuesta bastante más

caro que trabajar con servidores dedicados tradicionales, o con servidores en la nube. No solo es

caro para montarlo, también se debe tener en cuenta que al necesitar escalar se necesitará

agregar más servidores al esquema de red, incrementando así los gastos.

EquipoAzul

**2.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**Complejidad**: no todas las empresas proveedores de servicios de Internet, o de web hosting

tienen el tiempo, la infraestructura y el personal técnico calificado para montar este tip o de

soluciones. La alta complejidad a nivel técnico hace que montar un servidor en clúster se logre

hoy por hoy en muy pocos proveedores del mundo hispano.

**Tiempo de implementación**: montar, configurar y dejar a punto un clúster de servidores puede

tomar varias semanas, a varios meses, dependiendo de la complejidad del sistema, de las

aplicaciones y tipos de balanceo de carga y replicación de datos [(servidores](https://blog.infranetworking.com/servidor-espejo/)[ ](https://blog.infranetworking.com/servidor-espejo/)[en](https://blog.infranetworking.com/servidor-espejo/)[ ](https://blog.infranetworking.com/servidor-espejo/)[espejo](https://blog.infranetworking.com/servidor-espejo/)[ ](https://blog.infranetworking.com/servidor-espejo/)por

ejemplo) usados en la arquitectura. Por lo que no suele ser una solución para quienes necesitan

una opción rápida.

**No son a prueba de fallos:** contrario a su finalidad y naturaleza, lamentablemente, los servidores

en clúster también pueden fallar, le ha sucedido a Gmail, Yahoo, Hotmail, la NASA, tarde o

temprano la perfecta arquitectura del clúster puede fallar por errores de red, software o hardware,

siempre debes tenerlo en cuenta. Lo que si te pueden garantizar es que fallarán mucho menos

que otras soluciones.

EquipoAzul

**3.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**2. COMPONENTES PRINCIPALES DEL CLUSTER**

**2.1. SERVIDOR**

EquipoAzul

**4.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**Características Principales:**

El PowerEdge R250, con tecnología de los procesadores Intel® Xeon® E-2300, es un servidor de

montaje en rack de nivel inicial que ofrece un equilibrio ideal entre adaptabilidad y precio asequible

para satisfacer las crecientes exigencias en materia de computación.

•

•

•

Admite hasta 32 GB de memoria DIMM a 3200 MT/s de velocidad y hasta 128 GB de

almacenamiento.

Aproveche las mejoras sustanciales en el rendimiento con la compatibilidad con PCIe

Gen 4.

Es ideal para archivos, impresión, mensajería, puntos de venta, alojamiento web y

colaboración.

•

•

Ofrece una eficiencia térmica mejorada.

Proporciona una mayor seguridad un tiempo de arranque más rápido con UEFI Secure

Boot.

**Especificaciones Técnicas:**

<https://www.dell.com/es-es/shop/povw/poweredge-r250#features_section>

EquipoAzul

**5.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**El motor de innovación para empresas de todos los tamaños**

El PowerEdge R250, con la tecnología de los procesadores Intel® Xeon® E-2300, ofrece potentes

funciones de computación para las aplicaciones empresariales más habituales con el fin de

optimizar la productividad.

<https://www.dell.com/es-es/shop/povw/poweredge-r250#techspecs_section>

EquipoAzul

**6.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**2.2. SWITCH**

EquipoAzul

**7.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**Características Principales:**

[https://www.fs.com/es/products/134656.html?country=ES&currency=EUR&languages=Es](https://www.fs.com/es/products/134656.html?country=ES&currency=EUR&languages=Espa%C3%B1ol&paid=google_shopping&utm_country=1005460&gclid=EAIaIQobChMIkurOl5eU-wIVTY1oCR2ocQwvEAQYBCABEgLdcPD_BwE)

[pa%C3%B1ol&paid=google_shopping&utm_country=1005460&gclid=EAIaIQobChMIkurOl](https://www.fs.com/es/products/134656.html?country=ES&currency=EUR&languages=Espa%C3%B1ol&paid=google_shopping&utm_country=1005460&gclid=EAIaIQobChMIkurOl5eU-wIVTY1oCR2ocQwvEAQYBCABEgLdcPD_BwE)

[5eU-wIVTY1oCR2ocQwvEAQYBCABEgLdcPD_BwE](https://www.fs.com/es/products/134656.html?country=ES&currency=EUR&languages=Espa%C3%B1ol&paid=google_shopping&utm_country=1005460&gclid=EAIaIQobChMIkurOl5eU-wIVTY1oCR2ocQwvEAQYBCABEgLdcPD_BwE)

EquipoAzul

**8.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**2.3. DISCO DURO**

EquipoAzul

**9.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**Características Principales:**

Las unidades de disco duro SATA de HP están disponibles en factor de forma grande (LFF) (3,5

pulg.) y factor de forma reducido (SFF) (2,5 pulg.) y vienen con una garantía estándar de un año.

Todas las unidades de disco duro de HP pasan un proceso de cualificación riguroso, que certifica

que todas las unidades de HP se han probado para funcionar en los entornos de servidores HP

ProLiant. Antes de la certificación final, todas las unidades de disco duro SATA de HP están

optimizadas para la compatibilidad y funcionalidad, incluyendo compatibilidad con SMART y HP

Systems Insight Manager.

•

Disco duro

o

o

o

o

o

o

Tipo de dispositivo: Unidad de disco duro.

Capacidad de disco duro: 1000 GB.

Interfaz del disco duro: Serial ATA III.

Velocidad de rotación de disco duro: 7200 RPM.

Tamaño de disco duro: 3.5".

Velocidad de transferencia Interfaz del disco duro: 6 Gbit/s.

•

Peso y dimensiones

o

o

o

o

Ancho: 146,1 mm.

Altura: 219,2 mm.

Profundidad: 254 mm.

Peso: 1,36 kg.

•

Contenido del embalaje

o

o

Adaptador para unidad de almacenamiento incluido: No.

Cantidad: 1.

[https://www.pccomponentes.com/hp-enterprise-35-1tb-6g-sata-3-](https://www.pccomponentes.com/hp-enterprise-35-1tb-6g-sata-3-lff?gclid=EAIaIQobChMIkYaP55CU-wIVjMftCh2f_gEmEAQYASABEgLnmvD_BwE)

[lff?gclid=EAIaIQobChMIkYaP55CU-wIVjMftCh2f_gEmEAQYASABEgLnmvD_BwE](https://www.pccomponentes.com/hp-enterprise-35-1tb-6g-sata-3-lff?gclid=EAIaIQobChMIkYaP55CU-wIVjMftCh2f_gEmEAQYASABEgLnmvD_BwE)

EquipoAzul

**10.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**2.4. CABINA DE DISCOS**

EquipoAzul

**11.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**Características Principales:**

**Rendimiento acelerado de las aplicaciones**

Aumento medio del rendimiento del 15 % en la indexación de fotos y otras operaciones que

requieren un uso informático intensivo, así como en el tiempo de respuesta de la base de datos.

**Capacidad y rendimiento óptimos**

Las ranuras SSD M.2 2280 NVMe integradas permiten la aceleración de la caché sin ocupar

receptáculos de unidades de almacenamiento.

**Amplía el almacenamiento con facilidad**

Amplía con flexibilidad hasta nueve unidades para aumentar la capacidad de almacenamiento a

medida que crece la demanda.

**Habilita la colaboración y la productividad**

Crea un entorno de colaboración local multiusuario in situ con un control detallado.

**Proteje y restaura datos en un instante**

Realiza copias de seguridad de los datos críticos y reduzca su objetivo de tiempo de recuperación

(RTO) con Snapshot Replication.

EquipoAzul

**12.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

[https://es.achatpc.com/catalog/product/view/id/422911/?utm_medium=cpc&utm_campaign](https://es.achatpc.com/catalog/product/view/id/422911/?utm_medium=cpc&utm_campaign=Shopping-flux&gclid=EAIaIQobChMIkI7xqJSU-wIVoIBQBh2uVg-IEAQYGCABEgKaYvD_BwE)

[=Shopping-flux&gclid=EAIaIQobChMIkI7xqJSU-wIVoIBQBh2uVg-](https://es.achatpc.com/catalog/product/view/id/422911/?utm_medium=cpc&utm_campaign=Shopping-flux&gclid=EAIaIQobChMIkI7xqJSU-wIVoIBQBh2uVg-IEAQYGCABEgKaYvD_BwE)

[IEAQYGCABEgKaYvD_BwE](https://es.achatpc.com/catalog/product/view/id/422911/?utm_medium=cpc&utm_campaign=Shopping-flux&gclid=EAIaIQobChMIkI7xqJSU-wIVoIBQBh2uVg-IEAQYGCABEgKaYvD_BwE)

EquipoAzul

**13.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**2.5. CONFIGURACIÓN DE LOS DISCOS**

Se realizará un **RAID 5.**

**¿Qué es una configuración de RAID 5?**

Un RAID 5 es una matriz de tres o más discos duros que funcionan como una unidad lógica y que

supera considerablemente a los soportes de datos individuales en términos de seguridad ante los

fallos y velocidad de lectura.

**Funcionamiento:**

Raid 5 utiliza al menos tres unidades de disco duro y extrae datos en múltiples unidades de disco

duro para mejorar el rendimiento a través del acceso simultáneo, pero a diferencia de RAID 0,

RAID 5 incluye códigos de corrección (bits de paridad) entre los datos.

El RAID 5 es particularmente conocido por su alto rendimiento y su tolerancia a las averías.

Además, sus datos están protegidos en caso de una falla, siempre que la falla esté en un solo

disco.

Cuando se produce la pérdida de datos en un solo disco, los datos permanecen accesibles, pero

se reducirá el rendimiento hasta que se restauren los datos faltantes. Por otro lado, si la falla se

refiere a varios discos, los datos se perderán.

EquipoAzul

**14.**





IES Ribera del Tajo – Dpto. Informática y Comunicaciones

CFGS: ASIR – Curso 2º

Clúster

Módulo: Proyecto EquipoAzul

**2.6. PRESUPUESTO**

**DESCRIPCIÓN**

**Servidor**

**PROOVEDOR CANTIDAD PRECIO UNIDAD**

**PRECIO TOTAL**

DELL

FS

2

1

4

1.225,94 €

531,19 €

2.451,88 €

531,19 €

**Switch**

**Disco duro**

PC-Componentes

Tonitrus

177,14 €

577,68 €

708,56 €

577,68 €

**Cabina de**

**discos**

1

**4.269,31 €**

**PRECIO TOTAL**

EquipoAzul

**15.**

