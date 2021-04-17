"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _filter = require("express-validator/filter");

var _httpStatus = _interopRequireDefault(require("http-status"));

var _customer_detail = _interopRequireDefault(require("../../../models/customer_detail.model"));

var _order = _interopRequireDefault(require("../../../models/order.model"));

var _utils = _interopRequireDefault(require("../../../utils"));

var _customers = _interopRequireDefault(require("../../services/customers.service"));

var _object = _interopRequireDefault(require("../../services/object.service"));

var _base = _interopRequireDefault(require("../base.controller"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

class CustomersController extends _base.default {
  constructor() {
    super('Customer');

    _defineProperty(this, "getCustomerData", (req, postData) => {
      const customer = {
        name: postData.name,
        address: postData.address,
        email: postData.email,
        mobile: postData.mobile
      };
      return customer;
    });

    _defineProperty(this, "list", async req => {
      const doc = await _customers.default.list(req);
      return this.sendResponse(_httpStatus.default.OK, true, this.messages.LIST_SUCCESS, _utils.default.getPagination(doc));
    });

    _defineProperty(this, "changeStatus", async req => {
      const update = await _customers.default.changeStatus(req.body);

      if (!update) {
        return this.throwError(_httpStatus.default.OK, false, this.messages.STATUS_NOT_UPDATE_SUCCESS);
      }

      return this.sendResponse(_httpStatus.default.OK, true, this.messages.STATUS_UPDATE_SUCCESS, {});
    });

    _defineProperty(this, "generatePdfFile", async req => {
      var pdf = require("pdf-creator-node");

      var fs = require('fs');

      var html = fs.readFileSync(__dirname + '/template.html', 'utf8');
      var options = {
        format: "A3",
        orientation: "portrait",
        border: "10mm"
      };

      const {
        MongoClient
      } = require('mongodb');

      const customer = await _customers.default.model.findById(req.params.id);
      const client = await MongoClient.connect('mongodb://127.0.0.1:27017/ranthamboredb');
      const db = client.db('ranthamboredb');

      var mongo = require('mongodb');

      var ooid = new mongo.ObjectID(req.body.customer_id);
      const voucher_docs = await db.collection('vouchers').findOne({
        name: "voucher_no"
      });
      console;
      var voucherno = voucher_docs.value;
      const get_total_num_docs = await db.collection('ContactDetail').find({
        'customer_id': ooid
      }).count();
      const order_docs = await db.collection('Order').findOne({
        'customer_id': ooid
      });
      var newdate = new Date(order_docs.date);
      var dd = String(newdate.getDate()).padStart(2, '0');
      var mm = String(newdate.getMonth() + 1).padStart(2, '0');
      var yyyy = newdate.getFullYear();
      newdate = dd + '-' + mm + '-' + yyyy;
      order_docs.date = newdate;
      var new_order_doc = [];
      new_order_doc.push(order_docs);
      var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth() + 1).padStart(2, '0');
      var yyyy = today.getFullYear();
      today = dd + '-' + mm + '-' + yyyy;
      new_order_doc.count = get_total_num_docs;
      new_order_doc.zone = req.body.zone;
      new_order_doc.date = today;
      new_order_doc.voucher_no = voucherno;
      var document = {
        html: html,
        data: {
          myData: new_order_doc
        },
        path: __dirname.split('backend/')[0] + 'uploads/vocher_files/voucher_' + req.body.customer_id + '.pdf'
      };
      var res_re = pdf.create(document, options).then(res => {
        db.collection('vouchers').update({
          name: "voucher_no"
        }, {
          $inc: {
            value: 1
          }
        });
      }).catch(error => {//return this.throwError(httpStatus.BAD_GATEWAY, true, this.messages.INSERT_ERROR);
      });
      var file_path = 'uploads/vocher_files/voucher_' + req.body.customer_id + '.pdf';
      return this.sendResponse(_httpStatus.default.OK, true, file_path, ['File generated Success']);
    });

    _defineProperty(this, "sendVoucher", async req => {
      var customerId = req.body.customer_id;

      const fs = require('fs');

      const path = __dirname.split('backend/')[0] + 'uploads/vocher_files/voucher_' + req.body.customer_id + '.pdf';

      const nodemailer = require("nodemailer");

      let transport = nodemailer.createTransport({
        service: 'gmail',
        auth: {
          user: 'n2rtech785612@gmail.com',
          pass: 'Temp@785612'
        }
      });

      const {
        MongoClient
      } = require('mongodb');

      const customer = await _customers.default.model.findById(req.params.id);
      const client = await MongoClient.connect('mongodb://127.0.0.1:27017/ranthamboredb');
      const db = client.db('ranthamboredb');

      var mongo = require('mongodb');

      var ooid = new mongo.ObjectID(req.body.customer_id);
      const order_docs = await db.collection('Customer').findOne({
        '_id': ooid
      });
      var customer_name = order_docs.name;
      const message = {
        from: 'ranthambore360@gmail.com',
        to: order_docs.email,
        subject: 'Ranthambore Jungle Safari ( Ranthambore National Park ) Booking Voucher',
        html: '<p>Dear, ' + order_docs.name + '<br></br>Kindly Check Your Safari Voucher in attachment.<br></br>Also Contact Your Safari Contact Person before one day for confirming reporting point.<br></br><br></br>Regards, Ranthambore Jungle Safari ( Ranthambore National Park ) Team.</p>',
        attachments: [{
          filename: 'voucher.pdf',
          path: path
        }]
      };
      transport.sendMail(message, function (err, info) {//console.log(info);

        /*if(info.response){
        	return this.sendResponse(httpStatus.OK, 'Voucheer sended on mail Successfully!', path, []);
        }else{
        	return this.throwError(httpStatus.BAD_GATEWAY, true, 'Voucher not sended try again!!');
        }*/
      });
      return this.sendResponse(_httpStatus.default.OK, 'Voucheer sended on mail Successfully!', path, []);
    });

    _defineProperty(this, "getPdfFile", async req => {
      var customerId = req.body.customer_id;

      const fs = require('fs');

      const path = __dirname.split('backend/')[0] + 'uploads/vocher_files/voucher_' + req.body.customer_id + '.pdf';
      var file_path = 'uploads/vocher_files/voucher_' + req.body.customer_id + '.pdf';

      try {
        await fs.promises.access(path);
        return this.sendResponse(_httpStatus.default.OK, true, file_path, ['Found']);
      } catch (error) {
        return this.sendResponse(_httpStatus.default.OK, true, false, ['Not Found']);
      }
    });

    _defineProperty(this, "create", async req => {
      const postData = req.body;
      const customer = this.getCustomerData(req, postData);

      if (postData.parent) {
        customer.parent = postData.parent;
      }

      customer.active = postData.active;
      customer.createdBy = req.user._id;
      const customerId = await _customers.default.create(customer);

      if (!customerId) {
        return this.throwError(_httpStatus.default.BAD_GATEWAY, true, this.messages.INSERT_ERROR);
      }

      return this.sendResponse(_httpStatus.default.OK, true, this.messages.INSERT_SUCCESS, {
        id: customerId
      });
    });

    _defineProperty(this, "update", async req => {
      const postData = req.body;
      const Category = await _customers.default.getById(req.params.id);

      if (Category) {
        const customer = this.getCustomerData(req, postData);
        Category.active = postData.active;
        Category.updatedBy = req.user._id;
        Category.name = customer.name;
        Category.description = customer.description;
        Category.parent = postData.parent; // if (postData.parent) {
        //   Category.parent = postData.parent;
        // }

        const doc = await _customers.default.update(Category);

        if (doc) {
          return this.sendResponse(_httpStatus.default.OK, true, this.messages.UPDATE_SUCCESS, doc);
        }

        return this.throwError(_httpStatus.default.OK, false, this.messages.UPDATE_ERROR);
      }

      return this.throwError(_httpStatus.default.OK, false, this.messages.NOT_FOUND);
    });

    _defineProperty(this, "getById", async req => {
      const {
        MongoClient
      } = require('mongodb');

      const customer = await _customers.default.model.findById(req.params.id);
      const client = await MongoClient.connect('mongodb://127.0.0.1:27017/ranthamboredb');
      const db = client.db('ranthamboredb');

      var mongo = require('mongodb');

      var ooid = new mongo.ObjectID(req.params.id);
      const docs = await db.collection('Customer').aggregate([{
        $match: {
          "_id": ooid
        }
      }, {
        $lookup: {
          from: 'Order',
          localField: '_id',
          foreignField: 'customer_id',
          as: 'orderdetails'
        }
      }, {
        $lookup: {
          from: 'ContactDetail',
          localField: '_id',
          foreignField: 'customer_id',
          as: 'customerdetails'
        }
      }]).toArray();

      if (customer) {
        const doc = _object.default.getCustomerDetailObject(customer);

        return this.sendResponse(_httpStatus.default.OK, true, this.messages.DETAILS_SUCCESS, docs);
      }

      return this.throwError(_httpStatus.default.OK, false, this.messages.NOT_FOUND);
    });
  }
  /**
   * @api {post} /categories Get Detail
   * @apiName GetCategoryDetail
   * @apiDescription Service to get Category detail
   * @apiGroup Category
   * @apiUse authHeader
   * @apiParam {String} id Unique identifier for customer.
   * @apiUse CategoryListDetail
   */


}

var _default = CustomersController;
exports.default = _default;