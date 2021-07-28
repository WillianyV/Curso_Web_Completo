-- ----------------------------
--  categorias
-- ----------------------------
CREATE TABLE categorias (
  	categoriaID SERIAL PRIMARY KEY,
  	nomecategoria VARCHAR(50) DEFAULT NULL);	

INSERT INTO categorias 
VALUES ('1', 'Coffee'), ('2', 'Food'), ('3', 'Merchandise'), ('4', 'Clothing');

-- ----------------------------
--  clientes
-- ----------------------------
CREATE TABLE clientes (
  clienteID SERIAL PRIMARY KEY,
  nomecompleto VARCHAR(50) DEFAULT NULL,
  endereco VARCHAR(50) DEFAULT NULL,
  complemento VARCHAR(30) DEFAULT NULL,
  numero varchar(15) DEFAULT NULL,
  cidade VARCHAR(50) DEFAULT NULL,
  estadoID INT DEFAULT NULL,
  cep VARCHAR(10) DEFAULT NULL,
  ddd VARCHAR(3) DEFAULT NULL,
  telefone VARCHAR(10) DEFAULT NULL,
  email VARCHAR(50) DEFAULT NULL,
  usuario VARCHAR(10) DEFAULT NULL,
  senha VARCHAR(10) DEFAULT NULL,
  nivel VARCHAR(10) DEFAULT NULL);

INSERT INTO clientes 
	VALUES 
	('7', 'Bob', 'Kobe Dr', 'Suite 31', '2929 ', 'São Paulo', '27', '92123', '11', '99999-0001', 'bobrob@dru', 'bobrob', 'cheese', 'admin'), 
	('8', 'Lee', 'Priestly Dr', 'Suite 30', '5927 ', 'Rio de Janeiro', '22', '92008', '21', '9999-0101', 'ldkim@drum', 'ldkim', 'drums', 'admin'), 
	('9', 'Jane', 'Priestly Dr', 'Suite 01', '5924 ', 'Recife', '17', '92008', '81', '9999-0202', 'jstev@fili', 'zac', 'zac', 'admin'), 
	('33', 'Mary', 'Mill Lane', 'House', '22', 'Rio de Janeiro', '22', 'P0987GH', '21', '9999-0303', 'mary@sheep.com', 'mary', 'baa', 'user'), 
	('34', 'Adriaan', 'Main St.', 'House', '31', 'Porto Alegre', '21', '90876', '51', '9999-0001', 'joe@blow.net', 'joe', 'blow', 'user'), 
	('35', 'Yeshe', 'Place des Vosges', 'House', '26 ', 'Recife', '17', '75003', '81', '9999-0404', 'kako@alibert.org', 'kako', 'crow', 'user'), 
	('36', 'Jean-Claude', 'Rue des Archives', 'Suite 31', '26 ', 'Salvador', '5', '75003', '71', '9999-0500', 'bouquet@paris.com', 'bouquet', 'archives', 'foreign'), 
	('37', 'Charmian', 'Biscane Boulevard', 'Suite 55', '21', 'Fortaleza', '6', '87543', '85', '9999-0001', 'thepet@cows.com', 'petty', 'officer', 'admin'), 
	('38', 'Tex', 'Ocean Dr', 'Suite 11', '32', 'Fortaleza', '6', '92107', '85', '9999-0002', 'minou@sefton.com', 'minou', 'lechat', 'user'), 
	('39', 'James', 'Lotus St', 'Suite 533', '33', 'Belo Horizonte', '13', '92107', '31', '9999-0001', 'jjones@thing.com', 'jj', 'magenta', 'user'), 
	('40', 'Scott', 'Harley St.', 'Suite 31', '1312 ', 'Curitiba', '16', '41414', '41', '9999-4001', 'scottie@theworks.camvria.com', 'scooby', 'doo', 'user'), 
	('41', 'Mavis', 'The Lane', 'Suite 01', '774', 'Florianopolis', '28', '99999', '48', '9999-0001', 'mave@formerly.sisters.org', 'mkirk', 'jesus', 'user'), 
	('42', 'Morton', 'Kwai', 'Suite 02', '101', 'João Pessoa', '15', '71717', '83', '9999-0001', 'mgold@brockyard.herrr.org', 'gold', 'rng665', 'user'), 
	('43', 'Monica', 'Arbor Drive', 'Suite 01', '21 ', 'Belém', '14', '91111', '91', '9999-0001', 'birch@nobodys.fool.com', 'birch', 'bsgr%', 'admin'), 
	('44', 'Amos', 'Framingham Ave', 'Suite 10', '4545 ', 'Manaus', '4', '31311', '92', '9999-0001', 'add@barnham.peoples.com', 'adur', 'adur', 'user'), 
	('45', 'Pietro', 'Vagam', 'Suite 01', '4010', 'Goiania', '9', 'dfsf', '63', '9999-0001', 'pcard@utica.gegli.it', 'cardinal', 'oojj&t', 'foreign'), 
	('46', 'Amosa', 'Conselheiro Av', 'Suite 15', '187', 'Brasília', '7', 'gfg', '61', '9999-9991', 'bosun@navarro.edu', 'partner', 'fairies', 'user'), 
	('47', 'Marvin', 'Domingos Dr', 'House', '2400', 'São Luis', '10', '30303', '98', '9999-0001', 'mdekal@megaprod.com', 'mdekal', 'uu6654', 'user'), 
	('48', 'Duncan', 'Aguamenon Av', 'Suite 21', '3010', 'Vitória', '8', '221', '27', '9999-0001', 'biggie@brabazon.co.il', 'brab', 'plane', 'foreign'), 
	('49', 'Brandon', 'Penny Lane', 'Suite 22', '1212 ', 'Macapá', '3', '21177', '96', '9999-0001', 'bshaft@thegroup.net', 'shaft', '3344510', 'user'), 
	('50', 'Raul', 'Farley Ave', 'Suite 10', '444 ', 'Maceió', '2', '92117', '82', '9999-0001', 'rost@aero.mx.com', 'pilot', 'brebby', 'user');

-- ----------------------------
--  departamentos
-- ----------------------------
CREATE TABLE departamentos (
  departamentoID SERIAL PRIMARY KEY,
  nomedepartamento VARCHAR(50) DEFAULT NULL);

INSERT INTO departamentos 
	VALUES 
	('1', 'financeiro'), 
	('2', 'comercial'), 
	('3', 'atendimento'), 
	('4', 'direção'), 
	('6', 'gerência financeira'), 
	('7', 'presidencia'), 
	('8', 'CPD');

-- ----------------------------
--  estados
-- ----------------------------
CREATE TABLE estados (
  estadoID SERIAL PRIMARY KEY,
  nome CHAR(20) DEFAULT '0',
  sigla CHAR(2) DEFAULT NULL);

INSERT INTO estados
	VALUES 
	('1', 'Acre', 'AC'), 
	('2', 'Alagoas', 'AL'), 
	('3', 'Amapá', 'AP'), 
	('4', 'Amazonas', 'AM'), 
	('5', 'Bahia', 'BA'), 
	('6', 'Ceará', 'CE'), 
	('7', 'Distrito Federal', 'DF'), 
	('8', 'Espírito Santo', 'ES'), 
	('9', 'Goiás', 'GO'), 
	('10', 'Maranhão', 'MA'), 
	('11', 'Mato Grosso', 'MT'), 
	('12', 'Mato Grosso do Sul', 'MS'), 
	('13', 'Minas Gerais', 'MG'), 
	('14', 'Pará', 'PA'), 
	('15', 'Paraíba', 'PB'), 
	('16', 'Paraná', 'PR'), 
	('17', 'Pernambuco', 'PE'), 
	('18', 'Piauí', 'PI'), 
	('19', 'RG do Norte', 'RN'), 
	('20', 'RG do Sul', 'RS'), 
	('21', 'Rio de Janeiro', 'RJ'), 
	('22', 'Rondônia', 'RO'), 
	('23', 'Roraima', 'RA'), 
	('24', 'Santa Catarina', 'SC'), 
	('25', 'São Paulo', 'SP'), 
	('26', 'Santa Catarina', 'SC'), 
	('27', 'Sergipe', 'SE'), 
	('28', 'Tocantins', 'TO');

-- ----------------------------
--  fornecedores
-- ----------------------------
CREATE TABLE fornecedores (
  fornecedorID SERIAL PRIMARY KEY,
  nomefornecedor VARCHAR(50) DEFAULT NULL,
  endereco VARCHAR(50) DEFAULT NULL,
  cidade VARCHAR(50) DEFAULT NULL,
  estadoID INT DEFAULT NULL,
  telefone VARCHAR(14) DEFAULT NULL);

INSERT INTO fornecedores 
	VALUES 
	('1', 'Joe Mugger', 'Rua Ernesto de Paula Santos, 187', 'Recife', '17', '949 568 7852'), 
	('2', 'Dining Suppliers', '5 Hometown Dr.', 'São Paulo', '27', '565 123 1223'), 
	('3', 'Pacific Merchandise', '56 Parkway Plaza', 'Rio de Janeiro', '22', '310 345 4565'), 
	('4', 'Quick Clothing', '4598 Main St', 'Porto Alegre', '21', '858 555 1654');

-- ----------------------------
--  fornecedores_contatos
-- ----------------------------
CREATE TABLE fornecedores_contatos (
  contatoID SERIAL PRIMARY KEY,
  fornecedorID INT DEFAULT NULL,
  departamentoID INT DEFAULT NULL,
  nome VARCHAR(50) DEFAULT NULL,
  telefone VARCHAR(15) DEFAULT NULL,
  email VARCHAR(50) DEFAULT NULL);

INSERT INTO fornecedores_contatos 
	VALUES 
	('1', '1', '1', 'Joana Piauí', '33262836', 'joana@joemugger.com'), 
	('2', '1', '2', 'Ricardo Prata', '33262836', 'ricardo@joemugger.com'), 
	('3', '2', '3', 'Gustavo Bege', '33262836', 'gustavo@dining.com'), 
	('4', '2', '2', 'Marta Borges', '33262836', 'marta@dining.com'), 
	('5', '3', '4', 'Fernando Maranhão', '33262836', 'fernando@pacific.com'), 
	('6', '3', '1', 'Ronaldo Catarinense', '33262836', 'ronaldo@pacific.com'), 
	('7', '4', '2', 'Alexandre Cisne', '33262836', 'alexandre@quickclothing.com'), 
	('8', '4', '1', 'Paulo José', '33262836', 'paulo@quickclothing.com'), 
	('9', '4', '4', 'Victor Nazário', '33262836', 'victor@quickclothing.com'), 
	('10', '4', '4', 'evellyn sales', '3326.2836', 'aneevellyn@gmail.com');

-- ----------------------------
--  franquias
-- ----------------------------
CREATE TABLE franquias (
  franquiaID SERIAL PRIMARY KEY,
  nomegerente VARCHAR(50) NOT NULL,
  endereco VARCHAR(50) NOT NULL,
  cidade VARCHAR(50) NOT NULL,
  estadoID INT NOT NULL,
  telefone VARCHAR(15) DEFAULT NULL,
  dataabertura DATE NOT NULL,
  faturamento DECIMAL(10,2) NOT NULL);

INSERT INTO franquias 
	VALUES 
	('1', 'Fabiana Albuquerque', 'Rua Jose Lourenço, 870 Sala 210', 'Fortaleza', '6', '085-2615554', '2006-05-18', '200000.00'), 
	('2', 'Neto Leal', 'Rua Ernesto de Paula Santos, 187 Sala 505', 'Recife', '17', '081.3326.2836', '2006-11-01', '300000.00'), 
	('3', 'Roberto Rabelo', 'Av. Antonio Carlos Magalhaes, 188', 'Salvador', '5', '071.3580705', '2006-12-16', '450000.00'), 
	('4', 'Victor Alves', 'Av. Barão de Studart, 101', 'Fortaleza', '6', '085.2480500', '2007-01-02', '150000.00'), 
	('5', 'Anne Sampaio', 'Av. Senhor do Bonfim', 'Salvador', '5', '417 625 6005', '2007-03-08', '280000.00'), 
	('6', 'Vinicius Samico', 'Av. Agamenon Magalhaes', 'Recife', '17', '081.33222233', '2007-05-01', '120000.00'), 
	('7', 'Paula Sanguinetti', 'Av. Presidente Prudente', 'Recife', '1', '081.3326.2938', '2007-10-11', '150000.00'), 
	('8', 'Michelle Alves', 'Av. Getúlio Vargas', 'Porto Alegre', '21', '051.3030302', '2007-11-20', '320000.00'), 
	('9', 'Saulo Brito', 'Av. São João, 10', 'São Paulo', '27', '011.3223-2232', '2008-04-02', '323221.00'), 
	('10', 'Davi Sampaio', 'Av. Copacabana, 101', 'Rio de Janeiro', '22', '021.3223-1010', '2008-05-01', '223421.00');

-- ----------------------------
--  pedidos
-- ----------------------------
CREATE TABLE pedidos (
  pedidoID SERIAL PRIMARY KEY,
  clienteID INT NOT NULL,
  transportadoraID INT DEFAULT NULL,
  data_pedido DATE NOT NULL,
  data_saida DATE DEFAULT NULL,
  data_entrega DATE DEFAULT NULL,
  status_pedido INT NOT NULL,
  valor_pedido DECIMAL(10,2) NOT NULL,
  conhecimento VARCHAR(20) DEFAULT NULL);

INSERT INTO pedidos 
	VALUES 
	('1', '7', '2', '2006-11-19', '2006-11-19', '2006-11-24', '1', '480.00', '2324324'), 
	('2', '8', '2', '2006-11-19', '2006-11-24', '2006-11-29', '1', '295.00', '2342342'), 
	('3', '8', '3', '2006-12-20', '2006-12-20', '2006-12-25', '2', '650.00', '2342341'), 
	('4', '22', '1', '2007-12-22', '2007-12-23', '2007-12-29', '1', '240.00', '2323424'), 
	('5', '33', '1', '2007-01-21', '2007-01-22', '2007-01-28', '1', '600.00', '4634633'), 
	('6', '33', '2', '2007-01-21', '2007-01-22', '2007-01-27', '1', '2720.00', '5453343'), 
	('7', '35', '1', '2007-01-24', '2007-01-25', '2007-01-28', '3', '260.00', '5646442'), 
	('8', '40', '3', '2007-01-27', '2007-01-29', '2007-01-31', '4', '1840.00', '4657574'), 
	('9', '43', '1', '2007-02-01', '2007-02-01', '2007-02-01', '1', '780.00', '9837958'), 
	('10', '48', '2', '2007-02-01', '2007-02-01', '2007-02-01', '2', '2240.00', '4345646'), 
	('11', '48', '3', '2007-02-03', '2007-02-03', '2007-02-08', '2', '1500.00', '7628364'), 
	('12', '22', '2', '2007-02-03', '2007-02-03', '2007-02-09', '1', '450.00', '6284882'), 
	('13', '35', '3', '2007-03-18', '2007-03-26', '2007-03-30', '1', '800.00', '7687688'), 
	('14', '40', '2', '2007-03-25', '2007-03-25', '2007-03-26', '2', '380.00', '8787999'), 
	('15', '7', '1', '2007-04-02', '2007-04-05', '2007-04-09', '2', '475.00', '2348729'), 
	('16', '22', '3', '2007-04-05', '2007-04-05', '2007-04-11', '1', '290.00', '3253221'), 
	('17', '50', '2', '2007-04-19', '2007-04-19', '2007-04-19', '2', '810.00', '3234221'), 
	('18', '8', '1', '2007-05-01', '2007-02-12', '2007-02-17', '2', '445.00', '2352329'), 
	('19', '7', '3', '2007-05-04', '2007-05-05', '2007-05-07', '1', '295.00', '7638888'), 
	('20', '50', '1', '2007-06-10', '2007-06-10', '2007-06-11', '2', '475.00', '7987989');

-- ----------------------------
--  pedidos_item
-- ----------------------------
CREATE TABLE pedidos_item (
  pedidoID INT DEFAULT NULL,
  produtoID INT DEFAULT NULL,
  precounitario DECIMAL(10,2) DEFAULT NULL,
  quantidade INT DEFAULT NULL
);

INSERT INTO pedidos_item 
	VALUES 
	('1', '1', '20.00', '10'), 
	('1', '2', '9.00', '20'), 
	('1', '5', '20.00', '5'), 
	('2', '10', '5.00', '50'), 
	('2', '11', '9.00', '5'), 
	('3', '13', '14.00', '20'), 
	('3', '15', '14.00', '10'), 
	('3', '20', '12.00', '5'), 
	('3', '19', '12.00', '10'), 
	('3', '21', '5.00', '10'), 
	('4', '20', '12.00', '20'), 
	('5', '18', '12.00', '20'), 
	('5', '19', '12.00', '10'), 
	('5', '20', '12.00', '15'), 
	('5', '17', '12.00', '5'), 
	('6', '1', '20.00', '5'), 
	('6', '2', '9.00', '100'), 
	('6', '3', '3.00', '20'), 
	('6', '4', '3.00', '200'), 
	('6', '7', '14.00', '70'), 
	('6', '19', '12.00', '10'), 
	('7', '13', '14.00', '10'), 
	('7', '14', '9.00', '5'), 
	('7', '21', '5.00', '15'), 
	('8', '16', '12.00', '5'), 
	('8', '17', '12.00', '5'), 
	('8', '10', '12.00', '60'), 
	('8', '1', '20.00', '50'), 
	('9', '11', '12.00', '30'), 
	('9', '12', '21.00', '20'), 
	('10', '18', '12.00', '35'), 
	('10', '9', '5.00', '100'), 
	('10', '7', '7.00', '90'), 
	('10', '14', '9.00', '50'), 
	('10', '6', '14.00', '10'), 
	('10', '22', '2.00', '50'), 
	('11', '21', '5.00', '300'), 
	('12', '11', '12.00', '10'), 
	('12', '5', '21.00', '15'), 
	('12', '3', '3.00', '5'), 
	('13', '2', '14.00', '20'), 
	('13', '19', '12.00', '10'), 
	('13', '22', '2.00', '50'), 
	('13', '3', '3.00', '100'), 
	('14', '7', '7.00', '50'), 
	('14', '8', '3.00', '10'), 
	('15', '1', '20.00', '8'), 
	('15', '2', '9.00', '15'), 
	('15', '17', '12.00', '15'), 
	('16', '18', '12.00', '10'), 
	('16', '19', '12.00', '5'), 
	('16', '21', '5.00', '10'), 
	('16', '10', '12.00', '5'), 
	('17', '6', '14.00', '5'), 
	('17', '8', '3.00', '100'), 
	('17', '2', '9.00', '15'), 
	('17', '12', '21.00', '5'),
	('17', '13', '14.00', '5'), 
	('17', '15', '14.00', '5'), 
	('17', '17', '12.00', '5'), 
	('18', '1', '20.00', '20'), 
	('18', '3', '3.00', '15'), 
	('19', '21', '5.00', '20'), 
	('19', '7', '7.00', '15'), 
	('19', '14', '9.00', '10'),
	('20', '18', '12.00', '20'), 
	('20', '19', '12.00', '10'), 
	('20', '22', '2.00', '15'), 
	('20', '8', '3.00', '5'),
	('20', '15', '14.00', '5');

-- ----------------------------
--  pedidos_status
-- ----------------------------
CREATE TABLE pedidos_status (
  statusID SERIAL PRIMARY KEY,
  nomestatus VARCHAR(50) NOT NULL);

INSERT INTO pedidos_status 
	VALUES 
	('1', 'Pagamento Confirmado'), 
	('2', 'Pagamento Pendente'), 
	('3', 'Cancelado pelo cliente'), 
	('4', 'Cancelado pela empresa');

-- ----------------------------
--  produtos
-- ----------------------------
CREATE TABLE produtos
(
    produtoid SERIAL PRIMARY KEY,
    nomeproduto character varying(50) DEFAULT NULL,
    descricao text COLLATE,
    codigobarra character varying(15) DEFAULT NULL,
    tempoentrega integer,
    precorevenda numeric(10,2) DEFAULT NULL,
    precounitario numeric(10,2) DEFAULT NULL,
    estoque integer,
    imagemgrande character varying(100) DEFAULT NULL,
    imagempequena character varying(100) DEFAULT NULL,
    descontinuado integer DEFAULT '0',
    fornecedorid integer,
    categoriaid integer);

INSERT INTO produtos 
	VALUES 
	('1', 'Biscottis', 'All-natural bite-sized biscuits.', '789151 823800', '15', '10.00', '20.00', '100', 'images/product_images/HoneyBiscotti_Big.jpg', 'images/product_images/HoneyBiscotti_Smallb.jpg', '0', '2', '2'), 
	('2', 'Organic Earl Grey', 'Because once in a blue moon you might want something besides coffee. This blend of black and green teas is highly aromatic, rich and flavorful with a hint of light citrus.', '789151 823798', '8', '6.00', '9.00', '1000', 'images/product_images/EarlGreyTea_Big.jpg', 'images/product_images/EarlGreyTea_Smallb.jpg', '0', '1', '2'), 
	('3', 'Sugar', 'How many spoonfuls do you need? Crystallized from 100% organic sugar cane, and milled within 24 hours of harvest to ensure it\s as fresh as our coffee beans.', '789151 823797', '8', '1.00', '3.00', '500', 'images/product_images/Sugar_Big.jpg', 'images/product_images/Sugar_Smallb.jpg', '0', '2', '2'), 
	('4', 'Non-Diary Creamer', 'If running out of milk or cream for your coffee is tantamount to a state of emergency, we suggest you stock up on these delicious non-dairy creamers just in case.', '789151 823796', '5', '2.00', '3.00', '500', 'images/product_images/NonDairyCreamer_Big.jpg', 'images/product_images/NonDairyCreamer_Smallb.jpg', '0', '2', '2'), 
	('5', 'Steel Mug', 'Here\s one way to make sure your coffee stays warm during a long commute. Made of lightweight metal alloy.', '789151 823795', '15', '15.00', '21.00', '300', 'images/product_images/SteelMug_Big.jpg', 'images/product_images/SteelMug_Smallb.jpg', '0', '3', '3'), 
	('6', 'Ceramic Mug', 'Handcrafted by Colorado artisans. These generous mugs feature an opaque green satin glaze over classic stoneware.', '789151 823799', '15', '10.00', '14.00', '80', 'images/product_images/CeramicMug_Big.jpg', 'images/product_images/CeramicMug_Smallb.jpg', '0', '3', '3'), 
	('7', 'Plastic Mug', 'If you\re a little klutzy in the morning, we recommend this shatter-proof, durable plastic commuter mug.', '789151 823795', '8', '5.00', '7.00', '750', 'images/product_images/PlasticMug_Big.jpg', 'images/product_images/PlasticMug_Smallb.jpg', '0', '3', '3'), 
	('8', 'Thermometer', 'Ideal for microwaving your coffee. With a stainless steel stem, large, easy-to-read digital display and case.', '789151 823654', '30', '1.50', '3.00', '45', 'images/product_images/Thermometer_Big.jpg', 'images/product_images/Thermometer_Smallb.jpg', '0', '3', '3'), 
	('9', 'Hype Filters', 'Never resort to using papers towels when you\re out of paper filters. This Gold-Tone filter is always ready.', '789151 823655', '5', '2.80', '5.00', '50', 'images/product_images/HypeFilters_Big.jpg', 'images/product_images/HypeFilters_Smallb.jpg', '0', '3', '3'), 
	('10', 'Brave New World T-Shirt', '100% cotton. Available in black, mocha or white.', '789151 823765', '5', '8.00', '12.00', '60', 'images/product_images/TShirt_Big.jpg', 'images/product_images/TShirt_Smallb.jpg', '0', '4', '4');


-- ----------------------------
--  transportadoras
-- ----------------------------
CREATE TABLE transportadoras (
  transportadoraID SERIAL PRIMARY KEY ,
  nometransportadora varchar(50) DEFAULT NULL,
  endereco varchar(50) DEFAULT NULL,
  telefone varchar(50) DEFAULT NULL,
  cidade varchar(50) DEFAULT NULL,
  estadoID INT DEFAULT NULL,
  cep varchar(10) DEFAULT NULL,
  cnpj varchar(19) DEFAULT NULL);

INSERT INTO transportadoras 
	VALUES 
	('1', 'Rapidão Estrela', 'Rua Ernesto de Paula Santos, 187', '33262836', 'Recife', '17', '51.021-330', '2234234234'), 
	('2', 'Itapemirão', 'Rua Visconde de Sabugosa, 11', '33262836', 'São Paulo', '27', '01.323.123', '2424243221'), 
	('3', 'SEDEX', 'Av Ipanema, 22123', '33262836', 'Rio de Janeiro', '21', '02.320.121', '2342424324');
