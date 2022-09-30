import axios from "axios";

const baseUrl = "http://localhost:8000/api/v1/";

const doGetRequest = async (entity) => {
  const options = {
    method: "GET",
    url: baseUrl + entity.toLowerCase(),
    headers: {
      "Access-Control-Allow-Origin": "*",
    },
  };
  const response = await sendRequest(options);

  return response;
};

const doPostRequest = async (entity, data) => {
  const options = {
    method: "POST",
    url: baseUrl + entity.toLowerCase(),
    data: data,
    headers: {
      "Accept": "application/json",
      "Content-Type": "multipart/form-data",
    },
  };
  const response = await sendRequest(options);

  return response;
};

async function doPatchRequest(entity, id, data) {
  const options = {
    method: "PATCH",
    url: baseUrl + entity.toLowerCase() + "/" + id,
    data: data,
    headers: {
      "Access-Control-Allow-Origin": "*",
      "Content-Type": "application/json",
    },
  };
  const response = await sendRequest(options);

  return response;
}

async function doDeleteRequest(entity, id) {
  const options = {
    method: "DELETE",
    url: baseUrl + entity.toLowerCase() + "/" + id,
    headers: {
      headers: {
        "Access-Control-Allow-Origin": "*",
        "Content-Type": "application/json",
      },
    },
  };
  const response = await sendRequest(options);

  return response;
}

const sendRequest = async (options) => {
  try {
    const response = await axios.request(options);

    return response.data;
  } catch (error) {
    console.error(error);
  }
};

export { doGetRequest, doPostRequest, doPatchRequest, doDeleteRequest };
